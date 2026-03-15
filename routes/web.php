<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use Modules\Hotel\Admin\HotelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\AirportSearchController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Debug route
// Route::get('/debug-flight-api', function() {
//     $service = new App\Services\AmadeusService();
//     echo "<h1>Debug Flight API</h1>";
//     echo "<style>.success { color: green; } .error { color: red; } .info { color: blue; }</style>";
    
//     // Test 1: Check token
//     echo "<h2>1. Testing Access Token</h2>";
//     $token = $service->getAccessToken();
//     if ($token) {
//         echo "<p class='success'>✅ Token obtained: " . substr($token, 0, 30) . "...</p>";
//     } else {
//         echo "<p class='error'>❌ Failed to get token</p>";
//         return;
//     }
    
//     // Test 2: Test connection first with a simpler API
//     echo "<h2>2. Testing API Connection (Simple Endpoint)</h2>";
//     try {
//         $client = new GuzzleHttp\Client();
//         $response = $client->get('https://test.api.amadeus.com/v1/reference-data/locations', [
//             'headers' => [
//                 'Authorization' => 'Bearer ' . $token,
//             ],
//             'query' => [
//                 'keyword' => 'MAD',
//                 'subType' => 'AIRPORT'
//             ]
//         ]);
        
//         $data = json_decode($response->getBody()->getContents(), true);
//         echo "<p class='success'>✅ API Connection successful</p>";
//         echo "<p class='info'>Found airport: " . ($data['data'][0]['name'] ?? 'Unknown') . " (" . ($data['data'][0]['iataCode'] ?? 'N/A') . ")</p>";
//     } catch (\Exception $e) {
//         echo "<p class='error'>❌ API Connection failed: " . htmlspecialchars($e->getMessage()) . "</p>";
//     }
    
//     // Test 3: Test flight search with GUARANTEED working parameters
//     echo "<h2>3. Testing Flight Search with Guaranteed Parameters</h2>";
    
//     // List of KNOWN WORKING test routes from Amadeus documentation
//     $testRoutes = [
//         ['origin' => 'MAD', 'destination' => 'PAR', 'name' => 'Madrid → Paris (Common European route)'],
//         ['origin' => 'LON', 'destination' => 'NYC', 'name' => 'London → New York (Major route)'],
//         ['origin' => 'SYD', 'destination' => 'BKK', 'name' => 'Sydney → Bangkok (Asia-Pacific)'],
//         ['origin' => 'MAD', 'destination' => 'ATH', 'name' => 'Madrid → Athens (Amadeus example)'],
//     ];
    
//     $foundWorkingRoute = false;
    
//     foreach ($testRoutes as $route) {
//         echo "<h3>Trying: " . $route['name'] . "</h3>";
        
//         try {
//             $client = new GuzzleHttp\Client();
            
//             // Use a date in the NEAR future (not 2026)
//             $departureDate = date('Y-m-d', strtotime('+45 days'));
            
//             $response = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers', [
//                 'headers' => [
//                     'Authorization' => 'Bearer ' . $token,
//                     'Accept' => 'application/vnd.amadeus+json'
//                 ],
//                 'query' => [
//                     'originLocationCode' => $route['origin'],
//                     'destinationLocationCode' => $route['destination'],
//                     'departureDate' => $departureDate,
//                     'adults' => 1,
//                     'nonStop' => false,
//                     'max' => 3,
//                     'currencyCode' => 'USD'
//                 ]
//             ]);
            
//             $data = json_decode($response->getBody()->getContents(), true);
//             $flightCount = count($data['data'] ?? []);
            
//             if ($flightCount > 0) {
//                 echo "<p class='success'>✅ SUCCESS! Found " . $flightCount . " flights for " . $route['origin'] . "→" . $route['destination'] . "</p>";
                
//                 // Show first flight details
//                 $firstFlight = $data['data'][0];
//                 echo "<div style='background: #f0f8ff; padding: 10px; margin: 10px 0; border-radius: 5px;'>";
//                 echo "<strong>Sample Flight:</strong><br>";
//                 echo "Price: " . ($firstFlight['price']['total'] ?? 'N/A') . " " . ($firstFlight['price']['currency'] ?? 'USD') . "<br>";
                
//                 if (isset($firstFlight['itineraries'][0]['segments'][0])) {
//                     $segment = $firstFlight['itineraries'][0]['segments'][0];
//                     echo "Airline: " . ($segment['carrierCode'] ?? 'Unknown') . " " . ($segment['number'] ?? '') . "<br>";
//                     echo "Departure: " . ($segment['departure']['iataCode'] ?? '') . " at " . 
//                          date('H:i', strtotime($segment['departure']['at'])) . "<br>";
//                     echo "Arrival: " . ($segment['arrival']['iataCode'] ?? '') . " at " . 
//                          date('H:i', strtotime($segment['arrival']['at'])) . "<br>";
//                 }
//                 echo "</div>";
                
//                 $foundWorkingRoute = true;
//                 break; // Stop after first successful route
//             } else {
//                 echo "<p class='info'>⚠️ No flights found for this route (but API call succeeded)</p>";
//                 echo "<p class='info'>Response: " . json_encode($data) . "</p>";
//             }
//         } catch (\Exception $e) {
//             $errorMessage = $e->getMessage();
            
//             // Check if it's a SYSTEM ERROR (means route has no data)
//             if (strpos($errorMessage, 'SYSTEM ERROR HAS OCCURRED') !== false) {
//                 echo "<p class='info'>⚠️ SYSTEM ERROR - This route has no test data available</p>";
//             } else if (strpos($errorMessage, 'INVALID DATA RECEIVED') !== false) {
//                 echo "<p class='error'>❌ INVALID DATA - Check parameters</p>";
//             } else {
//                 echo "<p class='error'>❌ Error: " . htmlspecialchars($errorMessage) . "</p>";
//             }
//         }
//     }
    
//     if (!$foundWorkingRoute) {
//         echo "<h3 class='error'>❌ No working routes found. Trying Flight Inspiration API...</h3>";
        
//         // Test Flight Inspiration API (more reliable in test environment)
//         try {
//             $client = new GuzzleHttp\Client();
//             $response = $client->get('https://test.api.amadeus.com/v1/shopping/flight-destinations', [
//                 'headers' => [
//                     'Authorization' => 'Bearer ' . $token,
//                 ],
//                 'query' => [
//                     'origin' => 'MAD',
//                     'departureDate' => date('Y-m-d', strtotime('+30 days')),
//                     'maxPrice' => 500,
//                     'viewBy' => 'DESTINATION'
//                 ]
//             ]);
            
//             $data = json_decode($response->getBody()->getContents(), true);
//             $destinationCount = count($data['data'] ?? []);
            
//             if ($destinationCount > 0) {
//                 echo "<p class='success'>✅ Flight Inspiration API works! Found " . $destinationCount . " destinations from MAD</p>";
//                 echo "<p class='info'>Sample destinations: ";
//                 $sampleDests = array_slice($data['data'] ?? [], 0, 3);
//                 foreach ($sampleDests as $dest) {
//                     echo $dest['destination'] . " ($" . ($dest['price']['total'] ?? 'N/A') . "), ";
//                 }
//                 echo "</p>";
//             } else {
//                 echo "<p class='info'>⚠️ No inspiration data found</p>";
//             }
//         } catch (\Exception $e) {
//             echo "<p class='error'>❌ Flight Inspiration also failed: " . htmlspecialchars($e->getMessage()) . "</p>";
//         }
//     }
    
//     // Test 4: Test your original DAC→CXB route with proper parameters
//     echo "<h2>4. Testing Your Original Route (DAC→CXB)</h2>";
//     try {
//         $client = new GuzzleHttp\Client();
//         $departureDate = date('Y-m-d', strtotime('+30 days'));
        
//         $response = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers', [
//             'headers' => [
//                 'Authorization' => 'Bearer ' . $token,
//                 'Accept' => 'application/vnd.amadeus+json'
//             ],
//             'query' => [
//                 'originLocationCode' => 'DAC',
//                 'destinationLocationCode' => 'CGP', // Try Chittagong instead of CXB
//                 'departureDate' => $departureDate,
//                 'adults' => 1,
//                 'nonStop' => false,
//                 'max' => 3,
//                 'currencyCode' => 'USD'
//             ]
//         ]);
        
//         $data = json_decode($response->getBody()->getContents(), true);
//         $flightCount = count($data['data'] ?? []);
        
//         if ($flightCount > 0) {
//             echo "<p class='success'>✅ Found " . $flightCount . " flights for DAC→CGP</p>";
//         } else {
//             echo "<p class='info'>⚠️ No flights found for DAC→CGP (API call succeeded but no data)</p>";
//             echo "<p class='info'>Trying DAC→BKK (Dhaka to Bangkok)...</p>";
            
//             // Try a more common international route
//             $response = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers', [
//                 'headers' => [
//                     'Authorization' => 'Bearer ' . $token,
//                     'Accept' => 'application/vnd.amadeus+json'
//                 ],
//                 'query' => [
//                     'originLocationCode' => 'DAC',
//                     'destinationLocationCode' => 'BKK', // Bangkok
//                     'departureDate' => $departureDate,
//                     'adults' => 1,
//                     'nonStop' => false,
//                     'max' => 3,
//                     'currencyCode' => 'USD'
//                 ]
//             ]);
            
//             $data = json_decode($response->getBody()->getContents(), true);
//             $flightCount = count($data['data'] ?? []);
            
//             if ($flightCount > 0) {
//                 echo "<p class='success'>✅ Found " . $flightCount . " flights for DAC→BKK (International route works!)</p>";
//             } else {
//                 echo "<p class='info'>⚠️ No flights found for DAC→BKK either</p>";
//             }
//         }
//     } catch (\Exception $e) {
//         $errorMessage = $e->getMessage();
//         if (strpos($errorMessage, 'SYSTEM ERROR HAS OCCURRED') !== false) {
//             echo "<p class='info'>⚠️ SYSTEM ERROR - No test data for Bangladesh routes in Amadeus sandbox</p>";
//         } else {
//             echo "<p class='error'>❌ Error: " . htmlspecialchars($errorMessage) . "</p>";
//         }
//     }
    
//     // Final summary
//     echo "<h2>📊 Debug Summary</h2>";
//     echo "<p><strong>Key Findings:</strong></p>";
//     echo "<ul>";
//     echo "<li>✅ Your authentication is working (token obtained)</li>";
//     echo "<li>⚠️ The Amadeus test environment has VERY LIMITED data</li>";
//     echo "<li>⚠️ Common routes like MAD→BOS may not have test data</li>";
//     echo "<li>⚠️ Bangladesh routes (DAC→CXB) likely have NO test data</li>";
//     echo "<li>✅ Try using the Flight Inspiration API for testing</li>";
//     echo "</ul>";
    
//     echo "<p><strong>Next Steps:</strong></p>";
//     echo "<ol>";
//     echo "<li>Use major international hubs for testing (LON, NYC, PAR, SYD, BKK)</li>";
//     echo "<li>Dates should be 30-60 days in the future, not years</li>";
//     echo "<li>For your app, you'll need the PRODUCTION API (api.amadeus.com) for real data</li>";
//     echo "<li>The test environment is only for verifying API connectivity</li>";
//     echo "</ol>";
// });

Route::get('/debug-flight-api', function() {
    $service = new App\Services\AmadeusService();
    echo "<h1>Debug Flight API - Fixed Version</h1>";
    echo "<style>.success { color: green; } .error { color: red; } .info { color: blue; }</style>";
    
    // Test 1: Check token
    echo "<h2>1. Testing Access Token</h2>";
    $token = $service->getAccessToken();
    if ($token) {
        echo "<p class='success'>✅ Token obtained: " . substr($token, 0, 30) . "...</p>";
    } else {
        echo "<p class='error'>❌ Failed to get token</p>";
        return;
    }
    
    // Test 2: Manual test with PROPER boolean format
    echo "<h2>2. Manual Test with Fixed Parameters</h2>";
    
    // Test different date formats
    $testDates = [
        '2025-06-16', // Fixed future date
        date('Y-m-d', strtotime('+60 days')), // 60 days from now
        '2025-01-15' // January next year
    ];
    
    foreach ($testDates as $testDate) {
        echo "<h3>Testing date: $testDate</h3>";
        
        try {
            $client = new GuzzleHttp\Client();
            
            // Build URL manually to see exactly what's being sent
            $queryParams = http_build_query([
                'originLocationCode' => 'MAD',
                'destinationLocationCode' => 'PAR',
                'departureDate' => $testDate,
                'adults' => 1,
                'nonStop' => 'false', // STRING 'false', not boolean
                'max' => 3,
                'currencyCode' => 'USD'
            ]);
            
            echo "<p class='info'>Query String: $queryParams</p>";
            
            $response = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers?' . $queryParams, [
                'headers' => [
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/vnd.amadeus+json'
                ]
            ]);
            
            $data = json_decode($response->getBody()->getContents(), true);
            $flightCount = count($data['data'] ?? []);
            
            if ($flightCount > 0) {
                echo "<p class='success'>✅ SUCCESS! Found $flightCount flights</p>";
                echo "<pre>" . json_encode($data['data'][0], JSON_PRETTY_PRINT) . "</pre>";
                break;
            } else {
                echo "<p class='info'>⚠️ No flights found (API call succeeded)</p>";
            }
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            echo "<p class='error'>❌ Error: " . htmlspecialchars($errorMessage) . "</p>";
            
            // Check error type
            if (strpos($errorMessage, 'must be a boolean') !== false) {
                echo "<p class='error'><strong>FIX NEEDED:</strong> You're still sending nonStop as 0/1 instead of true/false</p>";
            } else if (strpos($errorMessage, 'SYSTEM ERROR') !== false) {
                echo "<p class='info'>⚠️ SYSTEM ERROR - No test data for this date/route</p>";
            }
        }
    }
    
    // Test 3: Try Flight Offers Price API (different endpoint)
    echo "<h2>3. Testing Flight Offers Price API</h2>";
    
    // First get a flight offer ID from a different call
    try {
        $client = new GuzzleHttp\Client();
        
        // Try a cached search (more reliable)
        $response = $client->get('https://test.api.amadeus.com/v1/shopping/flight-destinations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
            'query' => [
                'origin' => 'MAD',
                'departureDate' => '2025-06',
                'oneWay' => 'false',
                'duration' => '1,7',
                'nonStop' => 'false',
                'maxPrice' => 1000
            ]
        ]);
        
        $data = json_decode($response->getBody()->getContents(), true);
        
        if (isset($data['data'][0])) {
            echo "<p class='success'>✅ Flight Destinations API works!</p>";
            echo "<p>Found destination: " . $data['data'][0]['destination'] . " for $" . ($data['data'][0]['price']['total'] ?? 'N/A') . "</p>";
        } else {
            echo "<p class='info'>⚠️ No destination data found</p>";
        }
    } catch (\Exception $e) {
        echo "<p class='error'>❌ Flight Destinations failed: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    
    // Final check
    echo "<h2>📋 Final Status Check</h2>";
    echo "<p><strong>If you see 'must be a boolean' errors:</strong></p>";
    echo "<ol>";
    echo "<li>Make sure ALL your API calls send <code>nonStop='false'</code> (string) not <code>nonStop=0</code></li>";
    echo "<li>Check your Guzzle client calls in ALL methods</li>";
    echo "<li>Use <code>http_build_query()</code> to see the exact URL being sent</li>";
    echo "</ol>";
    
    echo "<p><strong>Quick test URL:</strong></p>";
    echo "<code>https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=MAD&destinationLocationCode=PAR&departureDate=2025-06-16&adults=1&nonStop=false&max=3&currencyCode=USD</code>";
});


Route::get('/test-amadeus-real', function() {
    $service = new App\Services\AmadeusService();
    $token = $service->getAccessToken();
    
    echo "<h1>Amadeus REAL Working Test</h1>";
    echo "<style>.success { color: green; } .error { color: red; } .info { color: blue; }</style>";
    
    if (!$token) {
        echo "<p class='error'>❌ No token</p>";
        return;
    }
    
    // Use the Flight Inspiration API FIRST (more reliable)
    echo "<h2>1. Testing Flight Inspiration API</h2>";
    
    try {
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://test.api.amadeus.com/v1/shopping/flight-destinations', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
            ],
            'query' => [
                'origin' => 'MAD',
                'departureDate' => '2025-12-24', // Month only, not specific date
                'oneWay' => 'false',
                'duration' => '1,15',
                'nonStop' => 'false',
                'maxPrice' => 2000,
                'viewBy' => 'DESTINATION'
            ]
        ]);
        
        $data = json_decode($response->getBody()->getContents(), true);
        
        if (isset($data['data'][0])) {
            echo "<p class='success'>✅ SUCCESS! Flight Inspiration API works</p>";
            echo "<p>Found " . count($data['data']) . " destinations from Madrid</p>";
            
            // Show first 3 destinations
            echo "<table border='1' cellpadding='5'>";
            echo "<tr><th>Destination</th><th>Price</th><th>Departure Date</th><th>Return Date</th></tr>";
            
            foreach (array_slice($data['data'], 0, 3) as $dest) {
                echo "<tr>";
                echo "<td>" . ($dest['destination'] ?? 'N/A') . "</td>";
                echo "<td>$" . ($dest['price']['total'] ?? '0') . " " . ($dest['price']['currency'] ?? 'USD') . "</td>";
                echo "<td>" . ($dest['departureDate'] ?? 'N/A') . "</td>";
                echo "<td>" . ($dest['returnDate'] ?? 'N/A') . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            
            // Now try to get flight offers for the first destination
            $firstDest = $data['data'][0];
            echo "<h2>2. Testing Flight Offers for: MAD → " . $firstDest['destination'] . "</h2>";
            
            try {
                $response2 = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers', [
                    'headers' => [
                        'Authorization' => 'Bearer ' . $token,
                        'Accept' => 'application/vnd.amadeus+json'
                    ],
                    'query' => [
                        'originLocationCode' => 'MAD',
                        'destinationLocationCode' => $firstDest['destination'],
                        'departureDate' => $firstDest['departureDate'],
                        'returnDate' => $firstDest['returnDate'],
                        'adults' => 1,
                        'nonStop' => 'false',
                        'max' => 5,
                        'currencyCode' => 'USD'
                    ]
                ]);
                
                $data2 = json_decode($response2->getBody()->getContents(), true);
                
                if (isset($data2['data'][0])) {
                    echo "<p class='success'>✅ SUCCESS! Found " . count($data2['data']) . " flight offers</p>";
                    
                    // Show first flight
                    $flight = $data2['data'][0];
                    echo "<div style='background: #f0f8ff; padding: 15px; border-radius: 5px; margin: 10px 0;'>";
                    echo "<h3>Sample Flight Details:</h3>";
                    echo "<p><strong>Price:</strong> $" . $flight['price']['total'] . " " . $flight['price']['currency'] . "</p>";
                    
                    if (isset($flight['itineraries'][0]['segments'][0])) {
                        $segment = $flight['itineraries'][0]['segments'][0];
                        echo "<p><strong>Airline:</strong> " . ($segment['carrierCode'] ?? 'Unknown') . " " . ($segment['number'] ?? '') . "</p>";
                        echo "<p><strong>Departure:</strong> " . date('M d, H:i', strtotime($segment['departure']['at'])) . " from " . $segment['departure']['iataCode'] . "</p>";
                        echo "<p><strong>Arrival:</strong> " . date('M d, H:i', strtotime($segment['arrival']['at'])) . " at " . $segment['arrival']['iataCode'] . "</p>";
                    }
                    echo "</div>";
                } else {
                    echo "<p class='info'>⚠️ No flight offers found for this destination (but API call succeeded)</p>";
                    echo "<p><strong>Debug:</strong> " . json_encode($data2) . "</p>";
                }
                
            } catch (\Exception $e) {
                echo "<p class='error'>❌ Flight Offers error: " . htmlspecialchars($e->getMessage()) . "</p>";
            }
            
        } else {
            echo "<p class='info'>⚠️ No destinations found</p>";
            echo "<p><strong>Response:</strong> " . json_encode($data) . "</p>";
        }
        
    } catch (\Exception $e) {
        echo "<p class='error'>❌ Flight Inspiration API failed: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    
    // Test 3: Use the OFFICIAL Amadeus example route
    echo "<h2>3. Testing Official Amadeus Example Route</h2>";
    
    // From Amadeus documentation: https://developers.amadeus.com/self-service/category/flight/api-doc/flight-offers-search
    try {
        $client = new GuzzleHttp\Client();
        $response = $client->get('https://test.api.amadeus.com/v2/shopping/flight-offers', [
            'headers' => [
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/vnd.amadeus+json'
            ],
            'query' => [
                'originLocationCode' => 'SYD',
                'destinationLocationCode' => 'BKK',
                'departureDate' => '2025-08-01',
                'returnDate' => '2025-08-05',
                'adults' => 2,
                'nonStop' => 'false',
                'max' => 5,
                'currencyCode' => 'USD'
            ]
        ]);
        
        $data = json_decode($response->getBody()->getContents(), true);
        
        if (isset($data['data'][0])) {
            echo "<p class='success'>✅ SUCCESS! Official example works: Found " . count($data['data']) . " flights</p>";
            echo "<p><strong>First flight price:</strong> $" . $data['data'][0]['price']['total'] . " " . $data['data'][0]['price']['currency'] . "</p>";
        } else {
            echo "<p class='info'>⚠️ No flights for official example either</p>";
            echo "<p><em>This means the Amadeus test environment is having issues or your account has limited access.</em></p>";
        }
        
    } catch (\Exception $e) {
        echo "<p class='error'>❌ Official example failed: " . htmlspecialchars($e->getMessage()) . "</p>";
    }
    
    // Summary
    echo "<h2>📊 Final Analysis</h2>";
    echo "<p><strong>Your Status:</strong></p>";
    echo "<ul>";
    echo "<li>✅ Authentication: Working (token obtained)</li>";
    echo "<li>✅ Parameters: Correct (nonStop=false as string)</li>";
    echo "<li>⚠️ Test Data: Limited in Amadeus sandbox</li>";
    echo "</ul>";
    
    echo "<p><strong>What to do next:</strong></p>";
    echo "<ol>";
    echo "<li><strong>Go to:</strong> <a href='https://developers.amadeus.com/self-service/apis-docs' target='_blank'>Amadeus API Docs</a></li>";
    echo "<li><strong>Try their examples</strong> in the 'Try It' section</li>";
    echo "<li><strong>Check your account status</strong> in Amadeus Developer Portal</li>";
    echo "<li><strong>For production:</strong> You'll need to switch to production API (api.amadeus.com)</li>";
    echo "</ol>";
    
    echo "<p><strong>Direct API Test (copy this URL):</strong></p>";
    echo "<code>https://test.api.amadeus.com/v1/shopping/flight-destinations?origin=MAD&departureDate=2025-08&oneWay=false&duration=1,15&nonStop=false&maxPrice=2000</code>";
});


// Test routes
Route::prefix('test')->group(function () {
    Route::get('/amadeus', [TestController::class, 'testConnection'])->name('test.connection');
    Route::post('/hotel-search', [TestController::class, 'testHotelSearch'])->name('test.hotel-search');
    Route::get('/suggestions', [TestController::class, 'testSuggestions'])->name('test.suggestions');
});

Route::get('/test/flight-api', [TestController::class, 'testFlightAPI'])->name('test.flight-api');
Route::post('/test/flight-search', [TestController::class, 'testFlightSearchDetail'])->name('test.flight-search-detail');

// // Production hotel routes
// Route::prefix('api/hotels')->group(function () {
//     Route::post('/search', [HotelController::class, 'search']);
//     Route::get('/details', [HotelController::class, 'details']);
//     Route::get('/suggestions', [HotelController::class, 'suggestions']);
// });

// Web interface
Route::get('/hotels', [HotelController::class, 'index'])->name('hotels.index');
Route::get('/hotels/search', [HotelController::class, 'searchPage'])->name('hotels.search');

// Flight routes
Route::prefix('api/flights')->group(function () {
    Route::post('/search', [FlightController::class, 'search']);
    Route::get('/airport-suggestions', [FlightController::class, 'airportSuggestions']);
    Route::get('/inspiration', [FlightController::class, 'inspiration']);
    Route::post('/confirm-price', [FlightController::class, 'confirmPrice']);
});

// Web interface
Route::get('/flights', [FlightController::class, 'searchPage'])->name('flights.search');






Route::get('/intro', 'LandingpageController@index');

// flytrust stert 
Route::get('/', 'HomeController@index');
Route::get('/flight',[HomeController::class, 'flight'])->name('flight');

// airoport , city Public endpoints
Route::get('/airports/search', [AirportSearchController::class, 'search']);
Route::get('/airports/popular', [AirportSearchController::class, 'popular']);
Route::get('/airports/by-iata', [AirportSearchController::class, 'getByIata']);



Route::post('/flights/search', [FlightController::class, 'search']);

Route::get('/tour',[HomeController::class, 'tour'])->name('tour');
Route::get('/hotel',[HomeController::class, 'hotel'])->name('hotel');
Route::get('/visa',[HomeController::class, 'visa'])->name('visa');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'store'])->name('contact.store');
Route::get('/{id}/search', [HomeController::class, 'store'] )->name('hotel.search');

Route::get('/support-policy', [
    'uses' => 'App\Http\Controllers\HomeController@supportpolicy',
    'as'   => 'supportpolicy',
]);

Route::get('/privacy-policy', [
    'uses' => 'App\Http\Controllers\HomeController@privacypolicy',
    'as'   => 'privacypolicy',
]);

Route::get('/terms', [
    'uses' => 'App\Http\Controllers\HomeController@terms',
    'as'   => 'terms',
]);
// flytrust end 



Route::get('/home', 'HomeController@index')->name('home');
Route::post('/install/check-db', 'HomeController@checkConnectDatabase');

// Social Login
Route::get('social-login/{provider}', 'Auth\LoginController@socialLogin');
Route::get('social-callback/{provider}', 'Auth\LoginController@socialCallBack');

// Logs
Route::get(config('admin.admin_route_prefix') . '/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware(['auth', 'dashboard', 'system_log_view'])->name('admin.logs');

Route::get('/install', 'InstallerController@redirectToRequirement')->name('LaravelInstaller::welcome');
Route::get('/install/environment', 'InstallerController@redirectToWizard')->name('LaravelInstaller::environment');
Route::fallback([\Modules\Core\Controllers\FallbackController::class, 'FallBack']);

// Hide page update default
Route::get('/update', 'InstallerController@redirectToHome');
Route::get('/update/overview', 'InstallerController@redirectToHome');
Route::get('/update/database', 'InstallerController@redirectToHome');
