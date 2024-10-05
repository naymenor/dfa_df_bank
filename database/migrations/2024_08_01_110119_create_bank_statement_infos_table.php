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
            $table->string('customer_id');
            $table->string('nid');
            $table->string('mobile');
            $table->decimal('regular_monthly_income', 15, 2);
            $table->date('regular_income_date');
            $table->decimal('regular_payment_amount', 15, 2);
            $table->date('regular_payment_date');
            $table->decimal('monthly_balance', 15, 2);
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
