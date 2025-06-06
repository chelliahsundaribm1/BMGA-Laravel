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
        Schema::create('pricing_breakdowns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_itinerary_id')->constrained()->onDelete('cascade');
            $table->string('type'); // e.g., base_fare, tax, discount
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pricing_breakdowns');
    }
};
