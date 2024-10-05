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
            $table->string('customer_id');
            $table->string('nid');
            $table->string('mobile');
            $table->date('trnx_date');
            $table->text('particulars');
            $table->string('chq_no');
            $table->decimal('withdrow', 15, 2);
            $table->decimal('deposit', 15, 2);
            $table->decimal('balance', 15, 2);
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
        Schema::dropIfExists('bank_statement_raw_data');
    }
};
