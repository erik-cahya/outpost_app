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
        Schema::create('payment', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->text('session_id')->nullable();
            $table->text('stripe_id')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('payment_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('package_name')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount_paid')->nullable();
            $table->string('status')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
