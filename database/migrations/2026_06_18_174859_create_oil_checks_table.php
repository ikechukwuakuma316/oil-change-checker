<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('oil_checks', function (Blueprint $table) {
            $table->id();
            $table->integer('current_odometer');
            $table->date('previous_oil_change_date');
            $table->integer('previous_oil_change_odometer');
            $table->boolean('is_due');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('oil_checks');
    }
};