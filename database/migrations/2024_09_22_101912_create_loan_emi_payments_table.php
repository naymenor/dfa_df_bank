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
        Schema::create('loan_emi_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_management_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('customer_id');
            $table->string('nid');
            $table->string('mobile');
            $table->string('uuid')->unique();
            $table->string('customer_acc_no');
            $table->string('emi_payment_data');
            $table->string('emi_month_for');
            $table->string('number_of_month_payment');
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
        Schema::dropIfExists('loan_emi_payments');
    }
};
