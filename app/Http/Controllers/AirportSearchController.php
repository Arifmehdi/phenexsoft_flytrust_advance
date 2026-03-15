<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;
use App\Models\AmadeusAirport;
use Illuminate\Support\Facades\Cache;

class AirportSearchController extends Controller
{
    /**
     * Search airports (database first, then API)
     */
    public function search(Request $request)
    {
        $request->validate([
            'keyword' => 'required|string|min:2',
            'max' => 'nullable|integer|max:20'
        ]);

        $keyword = $request->input('keyword');
        $maxResults = $request->input('max', 10);
        
        // 1. First search in database
        $dbResults = AmadeusAirport::search($keyword, $maxResults);
        
        if (count($dbResults) >= $maxResults) {
            return response()->json($this->formatResults($dbResults));
        }
        
        // 2. If not enough results, call Amadeus API
        $apiResults = $this->searchAmadeusApi($keyword, $maxResults - count($dbResults));
        
        // 3. Save new results to database
        foreach ($apiResults as $apiResult) {
            try {
                AmadeusAirport::saveFromAmadeus($apiResult);
            } catch (\Exception $e) {
                // Log error but continue
                \Log::warning('Failed to save airport: ' . $e->getMessage());
            }
        }
        
        // 4. Combine results
        $combinedResults = array_merge($dbResults, $this->formatResults($apiResults));
        
        return response()->json($combinedResults);
    }
    
    /**
     * Search Amadeus API
     */
    private function searchAmadeusApi(string $keyword, int $limit = 5): array
    {
        try {
            // Get credentials
            $clientId = config('amadeus.client_id');
            $clientSecret = config('amadeus.client_secret');
            $baseUrl = config('amadeus.base_url', 'https://test.api.amadeus.com');
            
            // Get access token
            $authResponse = Http::asForm()->post($baseUrl . '/v1/security/oauth2/token', [
                'grant_type' => 'client_credentials',
                'client_id' => $clientId,
                'client_secret' => $clientSecret
            ]);
            
            if (!$authResponse->successful()) {
                return [];
            }
            
            $accessToken = $authResponse->json()['access_token'];
            
            // Search API
            $searchResponse = Http::withToken($accessToken)
                ->get($baseUrl . '/v1/reference-data/locations', [
                    'subType' => 'CITY,AIRPORT',
                    'keyword' => $keyword,
                    'page[limit]' => $limit,
                    'sort' => 'analytics.travelers.score',
                    'view' => 'FULL' // Get full data for saving
                ]);
            
            if (!$searchResponse->successful()) {
                return [];
            }
            
            return $searchResponse->json()['data'] ?? [];
            
        } catch (\Exception $e) {
            \Log::error('Amadeus API error: ' . $e->getMessage());
            return [];
        }
    }
    
    /**
     * Get popular airports from database
     */
    public function popular(Request $request)
    {
        $limit = $request->input('limit', 10);
        $airports = AmadeusAirport::getPopular($limit);
        
        if (empty($airports)) {
            // Seed with default airports if database is empty
            $airports = $this->seedDefaultAirports();
        }
        
        return response()->json($this->formatResults($airports));
    }
    
    /**
     * Seed default airports in database
     */
    private function seedDefaultAirports(): array
    {
        $defaultAirports = [
            [
                'iata_code' => 'DAC',
                'name' => 'Hazrat Shahjalal International',
                'type' => 'AIRPORT',
                'city' => 'Dhaka',
                'country' => 'Bangladesh',
                'country_code' => 'BD',
                'is_popular' => true
            ],
            [
                'iata_code' => 'CXB',
                'name' => 'Cox\'s Bazar',
                'type' => 'AIRPORT',
                'city' => 'Cox\'s Bazar',
                'country' => 'Bangladesh',
                'country_code' => 'BD',
                'is_popular' => true
            ],
            [
                'iata_code' => 'CGP',
                'name' => 'Shah Amanat International',
                'type' => 'AIRPORT',
                'city' => 'Chittagong',
                'country' => 'Bangladesh',
                'country_code' => 'BD',
                'is_popular' => true
            ],
            [
                'iata_code' => 'JFK',
                'name' => 'John F Kennedy International',
                'type' => 'AIRPORT',
                'city' => 'New York',
                'country' => 'United States',
                'country_code' => 'US',
                'is_popular' => true
            ],
            [
                'iata_code' => 'LHR',
                'name' => 'London Heathrow',
                'type' => 'AIRPORT',
                'city' => 'London',
                'country' => 'United Kingdom',
                'country_code' => 'GB',
                'is_popular' => true
            ],
        ];
        
        foreach ($defaultAirports as $airportData) {
            AmadeusAirport::updateOrCreate(
                ['iata_code' => $airportData['iata_code']],
                $airportData
            );
        }
        
        return AmadeusAirport::getPopular(10);
    }
    
    /**
     * Format results for frontend
     */
    private function formatResults(array $data): array
    {
        $formatted = [];
        
        foreach ($data as $item) {
            $formatted[] = [
                'id' => $item['id'] ?? $item['iata_code'],
                'name' => $item['name'],
                'city' => $item['city'],
                'country' => $item['country'],
                'iataCode' => $item['iata_code'] ?? $item['iataCode'] ?? '',
                'type' => $item['type'] ?? $item['subType'],
                'fullName' => $this->generateFullName($item)
            ];
        }
        
        return $formatted;
    }
    
    /**
     * Generate display text
     */
    private function generateFullName(array $item): string
    {
        $airport = new Airport();
        foreach ($item as $key => $value) {
            $airport->$key = $value;
        }
        
        return $airport->getDisplayName();
    }
    
    /**
     * Get airport by IATA code (for autocomplete)
     */
    public function getByIata(Request $request)
    {
        $request->validate([
            'code' => 'required|string|size:3'
        ]);
        
        $airport = AmadeusAirport::where('iata_code', strtoupper($request->code))->first();
        
        if (!$airport) {
            // Try to fetch from API
            $apiResults = $this->searchAmadeusApi($request->code, 1);
            if (!empty($apiResults)) {
                $airport = AmadeusAirport::saveFromAmadeus($apiResults[0]);
            }
        }
        
        if (!$airport) {
            return response()->json(['error' => 'Airport not found'], 404);
        }
        
        return response()->json($this->formatResults([$airport->toArray()]));
    }
    
    /**
     * Admin endpoint to refresh airport data
     */
    public function refreshAirport(Request $request)
    {
        // Add authentication middleware for this in routes
        $request->validate([
            'iata_code' => 'required|string|size:3'
        ]);
        
        $apiResults = $this->searchAmadeusApi($request->iata_code, 1);
        
        if (empty($apiResults)) {
            return response()->json(['error' => 'Airport not found in Amadeus'], 404);
        }
        
        $airport = AmadeusAirport::saveFromAmadeus($apiResults[0]);
        
        return response()->json([
            'success' => true,
            'airport' => $this->formatResults([$airport->toArray()])
        ]);
    }
}