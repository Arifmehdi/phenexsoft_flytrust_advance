<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('amadeus_airports', function (Blueprint $table) {
            $table->id();
            $table->string('amadeus_id')->unique()->nullable();
            $table->string('iata_code', 3)->unique()->nullable();
            $table->string('icao_code', 4)->nullable();
            $table->string('name');
            $table->string('type'); // AIRPORT, CITY
            $table->string('city');
            $table->string('country');
            $table->string('country_code', 2);
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->integer('search_count')->default(0);
            $table->timestamp('last_searched_at')->nullable();
            $table->boolean('is_popular')->default(false);
            $table->json('timezone')->nullable();
            $table->timestamps();
            
            $table->index('iata_code');
            $table->index('city');
            $table->index('country');
            $table->index(['city', 'country']);
            $table->index('is_popular');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amadeus_airports');
    }
};
