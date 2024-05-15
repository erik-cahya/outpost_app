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
        Schema::create('service', function (Blueprint $table) {
            $table->string('id')->primary(); // Menggunakan UUID sebagai primary key
            $table->string('name');
            $table->string('service_category');
            $table->string('outpost_location_id');
            $table->enum('flexible_payment', ['Yes', 'No'])->default('No');
            $table->integer('idr_price')->nullable();
            $table->float('usd_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
