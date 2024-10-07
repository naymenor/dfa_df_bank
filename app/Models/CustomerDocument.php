<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'customer_id',
        'nid',
        'passport',
        'utility_bill',
        'bank_statement',
        'loan_statement',
        'visiting_card',
        'bank_cheque',
        'office_id',
        'nom_photo',
        'nom_nid',
        'payslip',
        'status',
    ];
}
