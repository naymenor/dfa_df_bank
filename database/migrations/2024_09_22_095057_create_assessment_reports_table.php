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
            $table->string('customer_id');
            $table->string('nid');
            $table->string('mobile');
            $table->string('uuid')->unique();
            $table->string('customer_acc_no');
            $table->text('bank_acc_info');
            $table->text('personal_info');
            $table->text('customer_profession_income');
            $table->text('reference_info');
            $table->text('credit_info');
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
        Schema::dropIfExists('assessment_reports');
    }
};
