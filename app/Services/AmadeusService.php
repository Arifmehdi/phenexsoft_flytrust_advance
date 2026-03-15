<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class AmadeusService
{
    private $client;
    private $apiKey;
    private $apiSecret;
    private $baseUrl;
    private $environment;

    public function __construct()
    {

        $this->client = new Client([
            'timeout' => 30,
            'verify' => false, // Set to true in production
        ]);
        
        $this->apiKey = env('AMADEUS_API_KEY', '99qiivqPN8WHvvGApBADUEjDHv9X58JH');
        $this->apiSecret = env('AMADEUS_API_SECRET', 'A7WoUojcVbCzq952');
        $this->environment = env('AMADEUS_ENVIRONMENT', 'test');
        $this->baseUrl = $this->environment === 'test' 
            ? 'https://test.api.amadeus.com'
            : 'https://api.amadeus.com';
    }

    /**
     * Get access token from Amadeus API
     */
    public function getAccessToken()
    {

        // Check if token exists in cache (tokens expire in 30 minutes)
        return Cache::remember('amadeus_access_token', 25, function () { // Cache for 25 minutes
            try {
                Log::info('Requesting Amadeus access token');
                
                $response = $this->client->post($this->baseUrl . '/v1/security/oauth2/token', [
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded'
                    ],
                    'form_params' => [
                        'grant_type' => 'client_credentials',
                        'client_id' => $this->apiKey,
                        'client_secret' => $this->apiSecret
                    ]
                ]);

                $data = json_decode($response->getBody()->getContents(), true);
                
                if (isset($data['access_token'])) {
                    Log::info('Amadeus token obtained successfully');
                    return $data['access_token'];
                } else {
                    Log::error('Amadeus token response missing access_token', $data);
                    return null;
                }
            } catch (\Exception $e) {
                Log::error('Amadeus Token Error: ' . $e->getMessage());
                Log::error('Token URL: ' . $this->baseUrl . '/v1/security/oauth2/token');
                return null;
            }
        });
    }

    /**
     * Test API connection
     */
    public function testConnection()
    {
        try {
            $token = $this->getAccessToken();
            
            if (!$token) {
                return [
                    'success' => false,
                    'message' => 'Failed to obtain access token'
                ];
            }

            // Test a simple endpoint
            $response = $this->client->get($this->baseUrl . '/v1/reference-data/locations', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'keyword' => 'DAC',
                    'subType' => 'AIRPORT'
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            return [
                'success' => true,
                'message' => 'API connection successful',
                'token' => substr($token, 0, 20) . '...',
                'data_sample' => isset($data['data'][0]) ? [
                    'name' => $data['data'][0]['name'] ?? '',
                    'iataCode' => $data['data'][0]['iataCode'] ?? ''
                ] : null
            ];
        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'API test failed: ' . $e->getMessage()
            ];
        }
    }

    // ******************************************************************** Flight start *********************************************************************************

     /**
     * Search flights (Flight Offers Search)
     */
/**
 * Search flights (Flight Offers Search)
 */
    public function searchFlights($origin, $destination, $departureDate, $returnDate = null, $adults = 1, $children = 0, $infants = 0, $travelClass = 'ECONOMY', $nonStop = false, $maxResults = 50)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [
                'success' => false,
                'error' => 'Unable to authenticate with Amadeus',
                'data' => []
            ];
        }

        try {
            $url = $this->baseUrl . '/v2/shopping/flight-offers';
            
            $query = [
                'originLocationCode' => $origin,
                'destinationLocationCode' => $destination,
                'departureDate' => $departureDate,
                'adults' => $adults,
                'children' => $children,
                'infants' => $infants,
                'travelClass' => $travelClass,
                'nonStop' => $nonStop ? 'true' : 'false', // Convert to string
                'max' => $maxResults,
                'currencyCode' => 'USD'
            ];

            // Add return date for round trips
            if ($returnDate) {
                $query['returnDate'] = $returnDate;
            }

            // Remove children/infants if 0 (optional)
            if ($children == 0) {
                unset($query['children']);
            }
            if ($infants == 0) {
                unset($query['infants']);
            }

            Log::info('Searching flights', $query);

            $response = $this->client->get($url, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/vnd.amadeus+json'
                ],
                'query' => $query
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            Log::info('Flight search completed', [
                'offers_found' => count($data['data'] ?? []),
                'origin' => $origin,
                'destination' => $destination
            ]);

            return [
                'success' => true,
                'data' => $data['data'] ?? [],
                'dictionaries' => $data['dictionaries'] ?? [],
                'meta' => $data['meta'] ?? []
            ];
        } catch (\Exception $e) {
            Log::error('Amadeus Flight Search Error: ' . $e->getMessage());
            
            if ($e->hasResponse()) {
                $errorBody = $e->getResponse()->getBody()->getContents();
                Log::error('Amadeus Flight Error Response: ' . $errorBody);
                
                // Try to parse the error message
                try {
                    $errorData = json_decode($errorBody, true);
                    if (isset($errorData['errors'][0]['detail'])) {
                        return [
                            'success' => false,
                            'error' => $errorData['errors'][0]['detail'],
                            'data' => []
                        ];
                    }
                } catch (\Exception $parseError) {
                    // If can't parse JSON, use raw error
                }
            }
            
            return [
                'success' => false,
                'error' => 'Flight search failed: ' . $e->getMessage(),
                'data' => []
            ];
        }
    }

    /**
     * Get airport/airline information
     */
    public function getAirportInfo($keyword, $subType = 'AIRPORT', $countryCode = null)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [];
        }

        try {
            $query = [
                'keyword' => $keyword,
                'subType' => $subType,
                'max' => 10
            ];

            if ($countryCode) {
                $query['countryCode'] = $countryCode;
            }

            $response = $this->client->get($this->baseUrl . '/v1/reference-data/locations', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => $query
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            return array_map(function ($location) {
                return [
                    'name' => $location['name'] ?? '',
                    'iataCode' => $location['iataCode'] ?? '',
                    'type' => $location['subType'] ?? '',
                    'city' => $location['address']['cityName'] ?? '',
                    'country' => $location['address']['countryName'] ?? '',
                    'full_name' => ($location['name'] ?? '') . ' (' . ($location['iataCode'] ?? '') . ')',
                    'detailed_name' => ($location['detailedName'] ?? $location['name'] ?? '')
                ];
            }, $data['data'] ?? []);
        } catch (\Exception $e) {
            Log::error('Amadeus Airport Info Error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get airline information
     */
    public function getAirlineInfo($airlineCodes)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [];
        }

        try {
            $response = $this->client->get($this->baseUrl . '/v1/reference-data/airlines', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'airlineCodes' => $airlineCodes
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            $airlines = [];
            foreach ($data['data'] ?? [] as $airline) {
                $airlines[$airline['iataCode']] = [
                    'name' => $airline['businessName'] ?? $airline['commonName'] ?? '',
                    'logo' => null // Amadeus doesn't provide logos directly
                ];
            }
            
            return $airlines;
        } catch (\Exception $e) {
            Log::error('Amadeus Airline Info Error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Get flight price confirmation
     */
    public function confirmFlightPrice($flightData)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [
                'success' => false,
                'error' => 'Unable to authenticate'
            ];
        }

        try {
            $response = $this->client->post($this->baseUrl . '/v1/shopping/flight-offers/pricing', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Content-Type' => 'application/vnd.amadeus+json',
                    'X-HTTP-Method-Override' => 'GET'
                ],
                'json' => [
                    'data' => [
                        'type' => 'flight-offers-pricing',
                        'flightOffers' => [$flightData]
                    ]
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            return [
                'success' => true,
                'data' => $data['data'] ?? []
            ];
        } catch (\Exception $e) {
            Log::error('Amadeus Price Confirmation Error: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Price confirmation failed'
            ];
        }
    }

    /**
     * Get flight inspiration (cheapest destinations)
     */
    public function getFlightInspiration($origin, $departureDate, $oneWay = false, $duration = '1,15', $maxPrice = 500)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [
                'success' => false,
                'error' => 'Unable to authenticate'
            ];
        }

        try {
            $query = [
                'origin' => $origin,
                'departureDate' => $departureDate,
                'oneWay' => $oneWay,
                'duration' => $duration,
                'maxPrice' => $maxPrice,
                'viewBy' => 'DESTINATION'
            ];

            $response = $this->client->get($this->baseUrl . '/v1/shopping/flight-destinations', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => $query
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            return [
                'success' => true,
                'data' => $data['data'] ?? []
            ];
        } catch (\Exception $e) {
            Log::error('Amadeus Flight Inspiration Error: ' . $e->getMessage());
            return [
                'success' => false,
                'error' => 'Flight inspiration search failed'
            ];
        }
    }


        // ******************************************************************** Flight end *********************************************************************************

    /**
     * Search hotels
     */
    public function searchHotels($cityCode, $checkInDate, $checkOutDate, $adults, $rooms = 1, $radius = 50, $radiusUnit = 'KM')
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [
                'success' => false,
                'error' => 'Unable to authenticate with Amadeus',
                'data' => []
            ];
        }

        try {
            Log::info('Searching hotels', [
                'cityCode' => $cityCode,
                'checkInDate' => $checkInDate,
                'checkOutDate' => $checkOutDate,
                'adults' => $adults
            ]);

            $response = $this->client->get($this->baseUrl . '/v2/shopping/hotel-offers', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json'
                ],
                'query' => [
                    'cityCode' => $cityCode,
                    'checkInDate' => $checkInDate,
                    'checkOutDate' => $checkOutDate,
                    'adults' => $adults,
                    'roomQuantity' => $rooms,
                    'radius' => $radius,
                    'radiusUnit' => $radiusUnit,
                    'bestRateOnly' => true,
                    'includeClosed' => false,
                    'sort' => 'PRICE',
                    'view' => 'LIGHT',
                    'lang' => 'EN',
                    'currency' => 'USD'
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            Log::info('Hotel search completed', [
                'hotels_found' => count($data['data'] ?? []),
                'cityCode' => $cityCode
            ]);

            return [
                'success' => true,
                'data' => $data['data'] ?? [],
                'meta' => $data['meta'] ?? []
            ];
        } catch (\Exception $e) {
            Log::error('Amadeus Hotel Search Error: ' . $e->getMessage());
            
            // Try to get more error details
            if ($e->hasResponse()) {
                $errorBody = $e->getResponse()->getBody()->getContents();
                Log::error('Amadeus Error Response: ' . $errorBody);
            }
            
            return [
                'success' => false,
                'error' => 'Hotel search failed: ' . $e->getMessage(),
                'data' => []
            ];
        }
    }

    /**
     * Get city code from city name
     */
    public function getCityCode($cityName, $countryCode = null)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return null;
        }

        try {
            $query = [
                'keyword' => $cityName,
                'subType' => 'CITY',
                'max' => 5
            ];

            if ($countryCode) {
                $query['countryCode'] = $countryCode;
            }

            $response = $this->client->get($this->baseUrl . '/v1/reference-data/locations', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json'
                ],
                'query' => $query
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            if (isset($data['data'][0]['iataCode'])) {
                return $data['data'][0]['iataCode'];
            }

            // If no city found, try with airport search
            $response = $this->client->get($this->baseUrl . '/v1/reference-data/locations', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'keyword' => $cityName,
                    'subType' => 'AIRPORT,CITY',
                    'max' => 5
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            return $data['data'][0]['iataCode'] ?? null;
        } catch (\Exception $e) {
            Log::error('Amadeus City Code Error: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Get hotel suggestions (autocomplete)
     */
    public function getHotelSuggestions($query, $maxResults = 10)
    {
        $token = $this->getAccessToken();
        if (!$token) {
            return [];
        }

        try {
            $response = $this->client->get($this->baseUrl . '/v1/reference-data/locations', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                ],
                'query' => [
                    'keyword' => $query,
                    'subType' => 'CITY,AIRPORT',
                    'max' => $maxResults
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            
            return array_map(function ($location) {
                return [
                    'name' => $location['name'] ?? '',
                    'country' => $location['address']['countryName'] ?? '',
                    'city' => $location['address']['cityName'] ?? '',
                    'iataCode' => $location['iataCode'] ?? '',
                    'type' => $location['subType'] ?? '',
                    'full_name' => ($location['name'] ?? '') . ', ' . ($location['address']['countryName'] ?? '')
                ];
            }, $data['data'] ?? []);
        } catch (\Exception $e) {
            Log::error('Amadeus Suggestions Error: ' . $e->getMessage());
            return [];
        }
    }



    public function testFlightSearch()
{
    try {
        $token = $this->getAccessToken();
        
        if (!$token) {
            return [
                'success' => false,
                'message' => 'Failed to obtain access token'
            ];
        }

        // Use Amadeus's OFFICIAL example that's guaranteed to work
        $response = $this->client->get($this->baseUrl . '/v2/shopping/flight-offers', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/vnd.amadeus+json'
            ],
            'query' => [
                'originLocationCode' => 'SYD',  // Sydney
                'destinationLocationCode' => 'BKK',  // Bangkok
                'departureDate' => date('Y-m-d', strtotime('+60 days')),
                'returnDate' => date('Y-m-d', strtotime('+65 days')),
                'adults' => 1,
                'nonStop' => 'false',
                'max' => 3,
                'currencyCode' => 'USD'
            ]
        ]);

        $data = json_decode($response->getBody()->getContents(), true);
        
        return [
            'success' => true,
            'message' => 'Flight API test successful',
            'flights_found' => count($data['data'] ?? []),
            'sample_flight' => isset($data['data'][0]) ? [
                'airline' => $data['data'][0]['itineraries'][0]['segments'][0]['carrierCode'] ?? 'Unknown',
                'price' => $data['data'][0]['price']['total'] ?? '0',
                'currency' => $data['data'][0]['price']['currency'] ?? 'USD'
            ] : null
        ];
    } catch (\Exception $e) {
        return [
            'success' => false,
            'message' => 'Flight API test failed: ' . $e->getMessage()
        ];
    }
}



    /**
 * Test flight search with hardcoded parameters
    */
    // public function testFlightSearch()
    // {
    //     try {
    //         $token = $this->getAccessToken();
            
    //         if (!$token) {
    //             return [
    //                 'success' => false,
    //                 'message' => 'Failed to obtain access token'
    //             ];
    //         }

    //         $query = [
    //             'originLocationCode' => 'MAD',
    //             'destinationLocationCode' => 'BOS',
    //             'departureDate' => '2026-06-01',
    //             'adults' => 1,
    //             'nonStop' => 'false',
    //             'max' => 5,
    //             'currencyCode' => 'USD'
    //         ];
    //         $queryString = http_build_query($query);

    //         // Test with known working parameters
    //         $response = $this->client->get($this->baseUrl . '/v2/shopping/flight-offers?' . $queryString, [
    //             'headers' => [
    //                 'Authorization' => 'Bearer ' . $token,
    //                 'Accept' => 'application/vnd.amadeus+json'
    //             ]
    //         ]);

    //         $data = json_decode($response->getBody()->getContents(), true);
            
    //         return [
    //             'success' => true,
    //             'message' => 'Flight API test successful',
    //             'flights_found' => count($data['data'] ?? []),
    //             'sample_flight' => isset($data['data'][0]) ? [
    //                 'airline' => $data['data'][0]['itineraries'][0]['segments'][0]['carrierCode'] ?? 'Unknown',
    //                 'price' => $data['data'][0]['price']['total'] ?? '0',
    //                 'currency' => $data['data'][0]['price']['currency'] ?? 'USD'
    //             ] : null
    //         ];
    //     } catch (\Exception $e) {
    //         return [
    //             'success' => false,
    //             'message' => 'Flight API test failed: ' . $e->getMessage()
    //         ];
    //     }
    // }
}