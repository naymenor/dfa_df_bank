<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankStatementInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'nid',
        'mobile',
        'regular_monthly_income',
        'regular_income_date',
        'regular_payment_amount',
        'regular_payment_date',
        'monthly_balance',
    ];
    
}
