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
        Schema::create('loan_managements', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->string('uuid')->unique();
            $table->string('customer_acc_no')->nullable();
            $table->string('loan_apprv_date')->nullable();
            $table->string('loan_amount')->nullable();
            $table->string('emi_amount')->nullable();
            $table->string('no_of_emi')->nullable();
            $table->string('interst_rate_pross_fee')->nullable();
            $table->string('pross_fee')->nullable();
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
        Schema::dropIfExists('loan_management');
    }
};
