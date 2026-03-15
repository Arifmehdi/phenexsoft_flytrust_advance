<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\AmadeusAirport;


class SeedPopularAirports extends Command
{
    protected $signature = 'airports:seed {--popular : Seed popular airports}';
    protected $description = 'Seed airports database with popular locations';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        if ($this->option('popular')) {
            $this->seedPopularAirports();
            return;
        }
        
        $this->info('Seeding airports...');
        
        // Add Bangladeshi airports
        $bdAirports = [
            ['DAC', 'Dhaka', 'Hazrat Shahjalal International Airport'],
            ['CXB', 'Cox\'s Bazar', 'Cox\'s Bazar Airport'],
            ['CGP', 'Chittagong', 'Shah Amanat International Airport'],
            ['ZYL', 'Sylhet', 'Osmani International Airport'],
            ['JSR', 'Jashore', 'Jashore Airport'],
            ['RJH', 'Rajshahi', 'Shah Makhdum Airport'],
            ['SPD', 'Saidpur', 'Saidpur Airport'],
            ['BZL', 'Barisal', 'Barisal Airport'],
        ];
        
        foreach ($bdAirports as $airport) {
            AmadeusAirport::updateOrCreate(
                ['iata_code' => $airport[0]],
                [
                    'name' => $airport[2],
                    'type' => 'AIRPORT',
                    'city' => $airport[1],
                    'country' => 'Bangladesh',
                    'country_code' => 'BD',
                    'is_popular' => true
                ]
            );
            $this->line("Added: {$airport[0]} - {$airport[1]}");
        }
        
        $this->info('Bangladeshi airports seeded successfully!');
    }
    
    private function seedPopularAirports()
    {
        $popularAirports = [
            ['DXB', 'Dubai', 'Dubai International Airport', 'UAE'],
            ['DOH', 'Doha', 'Hamad International Airport', 'Qatar'],
            ['KUL', 'Kuala Lumpur', 'Kuala Lumpur International Airport', 'Malaysia'],
            ['SIN', 'Singapore', 'Singapore Changi Airport', 'Singapore'],
            ['BKK', 'Bangkok', 'Suvarnabhumi Airport', 'Thailand'],
            ['DEL', 'Delhi', 'Indira Gandhi International Airport', 'India'],
            ['LHR', 'London', 'Heathrow Airport', 'UK'],
            ['JFK', 'New York', 'John F. Kennedy International Airport', 'USA'],
            ['CDG', 'Paris', 'Charles de Gaulle Airport', 'France'],
            ['HKG', 'Hong Kong', 'Hong Kong International Airport', 'China'],
        ];
        
        foreach ($popularAirports as $airport) {
            AmadeusAirport::updateOrCreate(
                ['iata_code' => $airport[0]],
                [
                    'name' => $airport[2],
                    'type' => 'AIRPORT',
                    'city' => $airport[1],
                    'country' => $airport[3],
                    'country_code' => $this->getCountryCode($airport[3]),
                    'is_popular' => true
                ]
            );
        }
        
        $this->info('Popular international airports seeded!');
    }
    
    private function getCountryCode($countryName): string
    {
        $codes = [
            'UAE' => 'AE', 'Qatar' => 'QA', 'Malaysia' => 'MY',
            'Singapore' => 'SG', 'Thailand' => 'TH', 'India' => 'IN',
            'UK' => 'GB', 'USA' => 'US', 'France' => 'FR', 'China' => 'CN'
        ];
        
        return $codes[$countryName] ?? '';
    }
}
