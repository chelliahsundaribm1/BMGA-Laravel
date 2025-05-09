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
        Schema::create('flight_itineraries', function (Blueprint $table) {
            $table->id();
            $table->string('bms_booking_code');
            $table->foreign('bms_booking_code')->references('bms_booking_code')->on('bookings')->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('itinerary_id');
            $table->integer('pax_count');
            $table->integer('adult_count');
            $table->integer('child_count');
            $table->integer('infant_count');
            $table->decimal('total_amount', 10, 2);
            $table->decimal('insurance_amount', 10, 2);
            $table->decimal('base_fare', 10, 2);
            $table->decimal('tax_and_surcharge', 10, 2);
            $table->decimal('tc_discount', 10, 2);
            $table->boolean('is_domestic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_itineraries');
    }
};
