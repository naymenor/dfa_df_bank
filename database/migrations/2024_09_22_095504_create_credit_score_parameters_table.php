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
        Schema::create('credit_score_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('ParameterName')->nullable();
            $table->string('HighScore')->nullable()->default('0');
            $table->string('MinEligibleScore')->nullable()->default('0');
            $table->string('weight')->nullable()->default('0');
            $table->string('cs_date')->nullable();
            $table->integer('requredata')->nullable();
            $table->string('action')->nullable();
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
        Schema::dropIfExists('credit_score_parameters');
    }
};
