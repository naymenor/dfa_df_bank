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
        Schema::create('credit_history_infos', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id'); 
            $table->string('nid');
            $table->string('mobile');
            $table->decimal('average_delay_for_payment', 15, 2)->nullable();
            $table->decimal('total_credit_amount', 15, 2)->nullable();
            $table->decimal('total_credit_utilized', 15, 2)->nullable();
            $table->date('first_active_credit_account_open_date')->nullable();
            $table->integer('no_of_credit_accounts')->nullable();
            $table->integer('no_of_retail_accounts')->nullable();
            $table->integer('no_of_installment_accounts')->nullable();
            $table->integer('no_of_mortgage_accounts')->nullable();
            $table->integer('no_of_new_credit_accounts')->nullable();
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
        Schema::dropIfExists('credit_history_infos');
    }
};
