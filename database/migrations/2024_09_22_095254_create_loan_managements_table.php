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
            $table->string('customer_id');
            $table->string('nid');
            $table->string('mobile');
            $table->string('uuid')->unique();
            $table->string('customer_acc_no');
            $table->string('loan_apprv_date');
            $table->string('loan_amount');
            $table->string('emi_amount');
            $table->string('no_of_emi');
            $table->string('interst_rate_pross_fee');
            $table->string('pross_fee');
            $table->string('created_by');
            $table->string('data_source');
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
