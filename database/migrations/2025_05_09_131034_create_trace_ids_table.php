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
        Schema::create('trace_ids', function (Blueprint $table) {
            $table->id();
            $table->string('trace_id');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('remaining_time');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trace_ids');
    }
};
