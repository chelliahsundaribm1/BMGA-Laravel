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

        Schema::create('add_ons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_itinerary_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('passenger_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name');
            $table->enum('addon_type', ['BAGGAGE', 'SEAT', 'MEAL', 'INSURANCE'])->nullable(); // New field
            $table->text('description')->nullable();
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_ons');
    }
};
