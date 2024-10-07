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
        Schema::create('assessment_reports', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('customer_id')->nullable();
            $table->integer('bank_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->string('customer_acc_no')->nullable();
            $table->string('survey_info')->nullable();
            $table->string('device_id')->nullable(); 
            $table->string('finacial_info')->nullable(); 
            $table->string('personal_info')->nullable(); 
            $table->string('education_info')->nullable(); 
            $table->string('employment_info')->nullable(); 
            $table->integer('emi_id')->nullable(); 
            $table->string('calculation')->nullable(); 
            $table->string('conformation')->nullable(); 
            $table->string('documents')->nullable(); 
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
        Schema::dropIfExists('assessment_reports');
    }
};
