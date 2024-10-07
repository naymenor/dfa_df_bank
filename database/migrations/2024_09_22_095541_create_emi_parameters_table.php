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
        Schema::create('emi_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('emi_no')->nullable();
            $table->string('title')->nullable();
            $table->string('duration')->nullable();
            $table->string('process_fee')->nullable();
            $table->string('down_payment')->nullable();
            $table->string('interest_rate')->nullable();
            $table->integer('bank_id')->nullable();
            $table->integer('status')->nullable();
            $table->string('created_by')->nullable();
            $table->string('data_source')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emi_parameters');
    }
};
