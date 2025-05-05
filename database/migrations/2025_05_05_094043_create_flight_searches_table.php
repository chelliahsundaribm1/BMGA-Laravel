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
        Schema::create('flight_searches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('direct_flight'); 
            $table->integer('adult_count');
            $table->integer('child_count'); 
            $table->integer('infant_count'); 
            $table->integer('journey_type'); 
            $table->string('origin', 3); 
            $table->string('destination', 3); 
            $table->dateTime('preferred_departure_time'); 
            $table->dateTime('preferred_return_departure_time')->nullable(); 
            $table->integer('flight_cabin_class'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_searches');
    }
};
