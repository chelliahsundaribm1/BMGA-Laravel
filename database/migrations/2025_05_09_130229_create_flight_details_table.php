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
        Schema::create('flight_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_itinerary_id')->constrained()->onDelete('cascade');
            $table->string('flight_number');
            $table->string('origin', 3);
            $table->string('destination', 3);
            $table->foreignId('airline_id')->constrained('airlines')->onDelete('cascade');
            $table->dateTime('departure_at');
            $table->dateTime('arrival_at');
            $table->enum('journey_type', ['ONE-WAY', 'ROUND-TRIP']);
            $table->string('aircraft_type')->nullable();
            $table->string('flight_duration')->nullable();
            $table->timestamps();

            $table->unique(
                ['flight_itinerary_id', 'flight_number', 'departure_at'],
                'uniq_itinerary_flight_departure'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_details');
    }
};
