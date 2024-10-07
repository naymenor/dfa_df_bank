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
        Schema::create('bank_statement_infos', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->string('uuid')->unique();
            $table->decimal('regular_monthly_income', 15, 2)->nullable();
            $table->date('regular_income_date')->nullable();
            $table->decimal('regular_payment_amount', 15, 2)->nullable();
            $table->date('regular_payment_date')->nullable();
            $table->decimal('monthly_balance', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_statement_infos');
    }
};
