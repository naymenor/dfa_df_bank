<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'customer_id',
        'bank_id',
        'nid',
        'mobile',
        'customer_acc_no',
        'survey_info',
        'device_id',
        'finacial_info',
        'personal_info',
        'education_info',
        'employment_info',
        'emi_id',
        'calculation',
        'conformation',
        'documents',
        'status',
        'created_by',
        'data_source'
    ];
}
