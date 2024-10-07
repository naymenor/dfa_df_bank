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
        Schema::create('customer_documents', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable();
            $table->string('customer_id')->nullable();
            $table->text('nid')->nullable();
            $table->text('passport')->nullable();
            $table->text('utility_bill')->nullable();
            $table->text('bank_statement')->nullable();
            $table->text('loan_statement')->nullable();
            $table->text('visiting_card')->nullable();
            $table->text('bank_cheque')->nullable();
            $table->text('office_id')->nullable();
            $table->text('nom_photo')->nullable();
            $table->text('nom_nid')->nullable();
            $table->text('payslip')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_documents');
    }
};
