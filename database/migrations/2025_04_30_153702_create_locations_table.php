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
        Schema::create('locations', function (Blueprint $table) {
            $table->id(); // "id": "1"
            $table->string('city'); // "city": "Bar-sur-Seine"
            $table->string('country'); // "country": "FR"
            $table->string('location_id'); // "location_id": "9937634393"
            $table->timestamps(); // Optional if you want created_at / updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
