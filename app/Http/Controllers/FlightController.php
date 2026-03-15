<?php

namespace App\Http\Controllers;

use App\Services\AmadeusService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FlightController extends Controller
{
    protected $amadeusService;

    public function __construct(AmadeusService $amadeusService)
    {
        $this->amadeusService = $amadeusService;
    }

    /**
     * Search flights
     */
    public function search(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'origin' => 'required|string|size:3',
            'destination' => 'required|string|size:3',
            'departure_date' => 'required|date|after_or_equal:today',
            'return_date' => 'nullable|date|after:departure_date',
            'adults' => 'required|integer|min:1|max:9',
            'children' => 'integer|min:0|max:9',
            'infants' => 'integer|min:0|max:9',
            'travel_class' => 'in:ECONOMY,PREMIUM_ECONOMY,BUSINESS,FIRST',
            'non_stop' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $result = $this->amadeusService->searchFlights(
                strtoupper($request->origin),
                strtoupper($request->destination),
                $request->departure_date,
                $request->return_date,
                $request->adults,
                $request->children ?? 0,
                $request->infants ?? 0,
                $request->travel_class ?? 'ECONOMY',
                $request->non_stop ?? false
            );

            if ($result['success'] && !empty($result['data'])) {
                // Get airline information for all airlines in the results
                $airlines = $this->extractAirlinesFromResults($result['data']);
                $airlineInfo = $this->amadeusService->getAirlineInfo($airlines);
                
                // Enhance flight data with airline info
                $result['data'] = $this->enhanceFlightData($result['data'], $airlineInfo);
            }

            return response()->json($result);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Search failed: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Get airport suggestions
     */
    public function airportSuggestions(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'query' => 'required|string|min:2',
            'type' => 'in:AIRPORT,CITY,AIRPORT_CITY'
        ]);

        if ($validator->fails()) {
            return response()->json(['data' => []]);
        }

        $type = $request->type ?? 'AIRPORT_CITY';
        $suggestions = $this->amadeusService->getAirportInfo(
            $request->query,
            $type === 'AIRPORT_CITY' ? 'AIRPORT,CITY' : $type
        );

        return response()->json([
            'success' => true,
            'data' => $suggestions
        ]);
    }

    /**
     * Get cheapest flights (inspiration)
     */
    public function inspiration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'origin' => 'required|string|size:3',
            'departure_date' => 'required|date|after_or_equal:today',
            'max_price' => 'integer|min:1'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $result = $this->amadeusService->getFlightInspiration(
            strtoupper($request->origin),
            $request->departure_date,
            $request->one_way ?? false,
            $request->duration ?? '1,15',
            $request->max_price ?? 500
        );

        return response()->json($result);
    }

    /**
     * Confirm flight price
     */
    public function confirmPrice(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'flight_offer' => 'required|array'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $result = $this->amadeusService->confirmFlightPrice($request->flight_offer);
        return response()->json($result);
    }

    /**
     * Extract unique airlines from flight results
     */
    private function extractAirlinesFromResults($flights)
    {
        $airlines = [];
        
        foreach ($flights as $flight) {
            foreach ($flight['itineraries'] as $itinerary) {
                foreach ($itinerary['segments'] as $segment) {
                    $carrierCode = $segment['carrierCode'] ?? '';
                    if ($carrierCode && !in_array($carrierCode, $airlines)) {
                        $airlines[] = $carrierCode;
                    }
                }
            }
        }
        
        return implode(',', array_slice($airlines, 0, 20)); // Limit to 20 airlines
    }

    /**
     * Enhance flight data with airline information
     */
    private function enhanceFlightData($flights, $airlineInfo)
    {
        foreach ($flights as &$flight) {
            // Add airline names to segments
            foreach ($flight['itineraries'] as &$itinerary) {
                foreach ($itinerary['segments'] as &$segment) {
                    $carrierCode = $segment['carrierCode'] ?? '';
                    if ($carrierCode && isset($airlineInfo[$carrierCode])) {
                        $segment['airlineName'] = $airlineInfo[$carrierCode]['name'];
                    }
                }
            }
            
            // Format price for display
            if (isset($flight['price']['total'])) {
                $flight['displayPrice'] = number_format($flight['price']['total'], 2);
                $flight['currency'] = $flight['price']['currency'] ?? 'USD';
            }
            
            // Calculate total duration
            $flight['totalDuration'] = $this->calculateTotalDuration($flight['itineraries']);
        }
        
        return $flights;
    }

    /**
     * Calculate total duration in hours and minutes
     */
    private function calculateTotalDuration($itineraries)
    {
        $totalMinutes = 0;
        
        foreach ($itineraries as $itinerary) {
            foreach ($itinerary['segments'] as $segment) {
                $duration = $segment['duration'] ?? '';
                if (preg_match('/PT(\d+H)?(\d+M)?/', $duration, $matches)) {
                    $hours = isset($matches[1]) ? intval(str_replace('H', '', $matches[1])) : 0;
                    $minutes = isset($matches[2]) ? intval(str_replace('M', '', $matches[2])) : 0;
                    $totalMinutes += ($hours * 60) + $minutes;
                }
            }
        }
        
        $hours = floor($totalMinutes / 60);
        $minutes = $totalMinutes % 60;
        
        return $hours . 'h ' . $minutes . 'm';
    }

    /**
     * Show flight search page
     */
    public function searchPage()
    {
        return view('flights.search');
    }
}