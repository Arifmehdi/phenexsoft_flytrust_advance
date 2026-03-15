<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use App\Models\AmadeusAirport;


class AmadeusAirport extends Model
{
    use HasFactory;
    protected $table = 'amadeus_airports';

    protected $fillable = [
        'amadeus_id',
        'iata_code',
        'icao_code',
        'name',
        'type',
        'city',
        'country',
        'country_code',
        'latitude',
        'longitude',
        'search_count',
        'last_searched_at',
        'is_popular',
        'timezone'
    ];

    protected $casts = [
        'timezone' => 'array',
        'last_searched_at' => 'datetime',
        'is_popular' => 'boolean'
    ];


    /**
     * Search airports in database first, then fallback to API
     */
    public static function search(string $keyword, int $limit = 10): array
    {
        $cacheKey = 'airport_search_' . md5($keyword . $limit);
        
        // Check cache first
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }
        
        // Search in database with multiple conditions
        $query = self::where(function($q) use ($keyword) {
            $q->where('city', 'LIKE', $keyword . '%')
              ->orWhere('name', 'LIKE', '%' . $keyword . '%')
              ->orWhere('iata_code', 'LIKE', $keyword . '%')
              ->orWhere('country', 'LIKE', $keyword . '%');
        })
        ->orderBy('search_count', 'desc')
        ->orderBy('is_popular', 'desc')
        ->limit($limit);
        
        $results = $query->get()->toArray();
        
        // Increment search count asynchronously
        if (!empty($results)) {
            $ids = collect($results)->pluck('id')->toArray();
            self::whereIn('id', $ids)->increment('search_count');
            self::whereIn('id', $ids)->update(['last_searched_at' => now()]);
        }
        
        Cache::put($cacheKey, $results, now()->addHours(24));
        
        return $results;
    }
    
    /**
     * Get popular airports (most searched)
     */
    public static function getPopular(int $limit = 10): array
    {
        return Cache::remember('popular_airports_' . $limit, now()->addHours(12), function() use ($limit) {
            return self::where('is_popular', true)
                ->orWhere('search_count', '>', 10)
                ->orderBy('search_count', 'desc')
                ->limit($limit)
                ->get()
                ->toArray();
        });
    }
    
    /**
     * Save airport from Amadeus API response
     */
    public static function saveFromAmadeus(array $amadeusData): self
    {
        $airport = self::updateOrCreate(
            [
                'amadeus_id' => $amadeusData['id'] ?? null
            ],
            [
                'iata_code' => $amadeusData['iataCode'] ?? null,
                'name' => $amadeusData['name'],
                'type' => $amadeusData['subType'],
                'city' => $amadeusData['address']['cityName'] ?? $amadeusData['name'],
                'country' => $amadeusData['address']['countryName'] ?? '',
                'country_code' => $amadeusData['address']['countryCode'] ?? '',
                'latitude' => $amadeusData['geoCode']['latitude'] ?? null,
                'longitude' => $amadeusData['geoCode']['longitude'] ?? null,
                'timezone' => isset($amadeusData['timezone']) ? [
                    'offset' => $amadeusData['timezone']['offset'],
                    'name' => $amadeusData['timezone']['name']
                ] : null
            ]
        );
        
        return $airport;
    }
    
    /**
     * Get display name for dropdown
     */
    public function getDisplayName(): string
    {
        $parts = [];
        
        if ($this->iata_code) {
            $parts[] = $this->iata_code;
        }
        
        if ($this->type === 'AIRPORT') {
            $parts[] = $this->name . ' Airport';
        } else {
            $parts[] = $this->name;
        }
        
        $parts[] = $this->city;
        $parts[] = $this->country;
        
        return implode(', ', $parts);
    }
    
    /**
     * Mark as popular airport
     */
    public function markAsPopular(): void
    {
        $this->update(['is_popular' => true]);
    }

}
