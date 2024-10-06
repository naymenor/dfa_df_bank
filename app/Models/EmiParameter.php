<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmiParameter extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'emi_no',
        'title',
        'duration',
        'process_fee',
        'down_payment',
        'interest_rate',
        'bank_id',
        'status',
        'data_source',
    ];
}
