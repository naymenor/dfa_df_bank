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
        Schema::create('bank_statement_raw_data', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->string('customer_id')->nullable();
            $table->string('nid')->nullable();
            $table->string('mobile')->nullable();
            $table->date('trnx_date')->nullable();
            $table->text('particulars')->nullable();
            $table->string('chq_no')->nullable();
            $table->decimal('withdrow', 15, 2)->nullable();
            $table->decimal('deposit', 15, 2)->nullable();
            $table->decimal('balance', 15, 2)->nullable();
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
        Schema::dropIfExists('bank_statement_raw_data');
    }
};
