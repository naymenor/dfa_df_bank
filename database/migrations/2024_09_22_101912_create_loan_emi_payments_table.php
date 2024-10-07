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
            $table->string('customer_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->string('uuid')->unique()->nullable();
            $table->string('customer_acc_no')->nullable();
            $table->string('emi_payment_data')->nullable();
            $table->string('emi_month_for')->nullable();
            $table->string('number_of_month_payment')->nullable();
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
        Schema::dropIfExists('loan_emi_payments');
    }
};
