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
        Schema::create('passengers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('bms_booking_code');
            $table->foreign('bms_booking_code')->references('bms_booking_code')->on('bookings')->onDelete('cascade');
            $table->string('title');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER']);
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('contact_number');
            $table->string('passport_number')->nullable();
            $table->date('passport_expiry')->nullable();
            $table->enum('pax_type', ['ADULT', 'CHILD', 'INFANT']);
            $table->decimal('pax_fare', 10, 2);
            $table->string('nationality')->nullable();
            $table->string('frequent_flyer_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passengers');
    }
};
