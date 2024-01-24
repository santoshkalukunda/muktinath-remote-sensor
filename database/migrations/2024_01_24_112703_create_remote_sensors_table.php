<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('remote_sensors', function (Blueprint $table) {
            $table->id();
            $table->integer('device_id');
            $table->boolean('fan');
            $table->boolean('heater');
            $table->boolean('fogger');
            $table->boolean('pad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remote_sensors');
    }
};
