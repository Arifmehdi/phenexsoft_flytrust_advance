<?php

namespace App\Http\Controllers;

use App\Services\AmadeusService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $amadeusService;

    public function __construct(AmadeusService $amadeusService)
    {
        $this->amadeusService = $amadeusService;
    }

    public function testConnection()
    {
        // dd('i Love you ');
        $result = $this->amadeusService->testConnection();
        
        echo "<h1>Amadeus API Connection Test</h1>";
        echo "<p><strong>Status:</strong> " . ($result['success'] ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
        echo "<p><strong>Message:</strong> " . $result['message'] . "</p>";
        
        if ($result['success']) {
            echo "<p><strong>Token Preview:</strong> " . $result['token'] . "</p>";
            if ($result['data_sample']) {
                echo "<p><strong>Sample Data:</strong> " . 
                     htmlspecialchars($result['data_sample']['name']) . " (" . 
                     htmlspecialchars($result['data_sample']['iataCode']) . ")</p>";
            }
        }
        
        echo "<hr>";
        echo "<h2>Test Hotel Search</h2>";
        echo '<form method="POST" action="' . route('test.hotel-search') . '">';
        echo csrf_field();
        echo '<label>City (IATA Code): <input type="text" name="city" value="DAC" placeholder="e.g., DAC for Dhaka"></label><br>';
        echo '<label>Check-in: <input type="date" name="checkin" value="' . date('Y-m-d', strtotime('+7 days')) . '"></label><br>';
        echo '<label>Check-out: <input type="date" name="checkout" value="' . date('Y-m-d', strtotime('+9 days')) . '"></label><br>';
        echo '<label>Adults: <input type="number" name="adults" value="2" min="1"></label><br>';
        echo '<button type="submit">Test Hotel Search</button>';
        echo '</form>';
    }

    public function testHotelSearch(Request $request)
    {
        $request->validate([
            'city' => 'required|string',
            'checkin' => 'required|date',
            'checkout' => 'required|date',
            'adults' => 'required|integer|min:1'
        ]);

        // First get city code if not already IATA code
        $cityCode = strlen($request->city) === 3 ? $request->city : 
                   $this->amadeusService->getCityCode($request->city, 'BD');

        if (!$cityCode) {
            return response()->json([
                'success' => false,
                'error' => 'Could not find city code for: ' . $request->city
            ]);
        }

        $result = $this->amadeusService->searchHotels(
            $cityCode,
            $request->checkin,
            $request->checkout,
            $request->adults
        );

        echo "<h1>Hotel Search Test Results</h1>";
        echo "<p><strong>City Code:</strong> " . $cityCode . "</p>";
        echo "<p><strong>Dates:</strong> " . $request->checkin . " to " . $request->checkout . "</p>";
        
        if ($result['success']) {
            $hotels = $result['data'];
            
            echo "<p><strong>Hotels Found:</strong> " . count($hotels) . "</p>";
            
            if (count($hotels) > 0) {
                echo "<table border='1' cellpadding='10'>";
                echo "<tr><th>Hotel</th><th>Rating</th><th>Address</th><th>Price</th></tr>";
                
                foreach ($hotels as $hotel) {
                    $name = $hotel['hotel']['name'] ?? 'Unknown';
                    $rating = $hotel['hotel']['rating'] ?? 'N/A';
                    $address = isset($hotel['hotel']['address']['lines'][0]) 
                        ? $hotel['hotel']['address']['lines'][0] 
                        : 'Address not available';
                    $price = isset($hotel['offers'][0]['price']['total']) 
                        ? $hotel['offers'][0]['price']['total'] . ' ' . ($hotel['offers'][0]['price']['currency'] ?? '')
                        : 'Price not available';
                    
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($name) . "</td>";
                    echo "<td>" . htmlspecialchars($rating) . "</td>";
                    echo "<td>" . htmlspecialchars($address) . "</td>";
                    echo "<td>" . htmlspecialchars($price) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No hotels found for this search criteria.</p>";
            }
        } else {
            echo "<p style='color: red;'><strong>Error:</strong> " . htmlspecialchars($result['error']) . "</p>";
        }
        
        echo '<br><a href="' . route('test.connection') . '">← Back to Test Page</a>';
    }

    public function testSuggestions(Request $request)
    {
        $query = $request->get('query', 'Dhaka');
        $suggestions = $this->amadeusService->getHotelSuggestions($query);
        
        echo "<h1>Location Suggestions for: " . htmlspecialchars($query) . "</h1>";
        echo "<p><strong>Results Found:</strong> " . count($suggestions) . "</p>";
        
        if (count($suggestions) > 0) {
            echo "<ul>";
            foreach ($suggestions as $suggestion) {
                echo "<li>";
                echo "<strong>" . htmlspecialchars($suggestion['name']) . "</strong><br>";
                echo "Type: " . htmlspecialchars($suggestion['type']) . "<br>";
                echo "IATA Code: " . htmlspecialchars($suggestion['iataCode']) . "<br>";
                echo "City: " . htmlspecialchars($suggestion['city']) . "<br>";
                echo "Country: " . htmlspecialchars($suggestion['country']) . "<br>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No suggestions found.</p>";
        }
        
        echo '<br><a href="' . route('test.connection') . '">← Back to Test Page</a>';
    }

    public function testFlightAPI()
    {
        $result = $this->amadeusService->testFlightSearch();
        
        echo "<h1>Amadeus Flight API Test</h1>";
        echo "<p><strong>Status:</strong> " . ($result['success'] ? '✅ SUCCESS' : '❌ FAILED') . "</p>";
        echo "<p><strong>Message:</strong> " . $result['message'] . "</p>";
        
        if ($result['success']) {
            echo "<p><strong>Flights Found:</strong> " . $result['flights_found'] . "</p>";
            if ($result['sample_flight']) {
                echo "<p><strong>Sample Flight:</strong> " . 
                    htmlspecialchars($result['sample_flight']['airline']) . " - " . 
                    htmlspecialchars($result['sample_flight']['price']) . " " . 
                    htmlspecialchars($result['sample_flight']['currency']) . "</p>";
            }
        }
        
        echo "<hr>";
        echo "<h2>Test Your Search</h2>";
        echo '<form method="POST" action="' . route('test.flight-search-detail') . '">';
        echo csrf_field();
        echo '<label>Origin (IATA Code): <input type="text" name="origin" value="MAD" placeholder="e.g., MAD for Madrid"></label><br>';
        echo '<label>Destination (IATA Code): <input type="text" name="destination" value="BOS" placeholder="e.g., BOS for Boston"></label><br>';
        echo '<label>Departure Date: <input type="date" name="departure_date" value="2025-06-01"></label><br>';
        echo '<label>Adults: <input type="number" name="adults" value="1" min="1"></label><br>';
        echo '<label>Non-stop only: <input type="checkbox" name="non_stop"></label><br>';
        echo '<button type="submit">Test Flight Search</button>';
        echo '</form>';
    }

    public function testFlightSearchDetail(Request $request)
    {
        $request->validate([
            'origin' => 'required|string|size:3',
            'destination' => 'required|string|size:3',
            'departure_date' => 'required|date',
            'adults' => 'required|integer|min:1',
            'non_stop' => 'nullable|boolean'
        ]);

        $result = $this->amadeusService->searchFlights(
            strtoupper($request->origin),
            strtoupper($request->destination),
            $request->departure_date,
            null, // return date
            $request->adults,
            0, // children
            0, // infants
            'ECONOMY',
            $request->has('non_stop'),
            10
        );

        echo "<h1>Flight Search Test Results</h1>";
        echo "<p><strong>Route:</strong> " . $request->origin . " → " . $request->destination . "</p>";
        echo "<p><strong>Date:</strong> " . $request->departure_date . "</p>";
        echo "<p><strong>Parameters:</strong> " . json_encode([
            'adults' => $request->adults,
            'nonStop' => $request->has('non_stop')
        ]) . "</p>";
        
        if ($result['success']) {
            $flights = $result['data'];
            
            echo "<p><strong>Status:</strong> ✅ SUCCESS</p>";
            echo "<p><strong>Flights Found:</strong> " . count($flights) . "</p>";
            
            if (count($flights) > 0) {
                echo "<table border='1' cellpadding='10'>";
                echo "<tr><th>Airline</th><th>Flight No</th><th>Departure</th><th>Arrival</th><th>Duration</th><th>Price</th><th>Stops</th></tr>";
                
                foreach ($flights as $flight) {
                    $firstSegment = $flight['itineraries'][0]['segments'][0];
                    $lastSegment = $flight['itineraries'][0]['segments'][count($flight['itineraries'][0]['segments']) - 1];
                    
                    $airline = $firstSegment['carrierCode'] ?? 'Unknown';
                    $flightNo = $firstSegment['number'] ?? 'N/A';
                    $departure = $firstSegment['departure']['iataCode'] . ' ' . substr($firstSegment['departure']['at'], 11, 5);
                    $arrival = $lastSegment['arrival']['iataCode'] . ' ' . substr($lastSegment['arrival']['at'], 11, 5);
                    $duration = $flight['itineraries'][0]['duration'];
                    $price = $flight['price']['total'] . ' ' . $flight['price']['currency'];
                    $stops = count($flight['itineraries'][0]['segments']) - 1;
                    
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($airline) . "</td>";
                    echo "<td>" . htmlspecialchars($flightNo) . "</td>";
                    echo "<td>" . htmlspecialchars($departure) . "</td>";
                    echo "<td>" . htmlspecialchars($arrival) . "</td>";
                    echo "<td>" . htmlspecialchars($duration) . "</td>";
                    echo "<td>" . htmlspecialchars($price) . "</td>";
                    echo "<td>" . htmlspecialchars($stops) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<p>No flights found for this search criteria.</p>";
                echo "<p><strong>Debug Info:</strong> " . json_encode($result) . "</p>";
            }
        } else {
            echo "<p style='color: red;'><strong>Error:</strong> " . htmlspecialchars($result['error']) . "</p>";
            echo "<p><strong>Full Error:</strong> " . json_encode($result) . "</p>";
        }
        
        echo '<br><a href="' . route('test.flight-api') . '">← Back to Test Page</a>';
    }
}