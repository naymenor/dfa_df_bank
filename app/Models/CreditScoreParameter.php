<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditScoreParameter extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'ParameterName',
        'HighScore',
        'MinEligibleScore',
        'cs_date',
        'requredata',
        'action',
        'status',
        'data_source',
        'weight',
    ];
}
