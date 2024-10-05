<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditHistoryInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'nid',
        'mobile',
        'average_delay_for_payment',
        'total_credit_amount',
        'total_credit_utilized',
        'first_active_credit_account_open_date',
        'no_of_credit_accounts',
        'no_of_retail_accounts',
        'no_of_installment_accounts',
        'no_of_mortgage_accounts',
        'no_of_new_credit_accounts',
    ];
}
