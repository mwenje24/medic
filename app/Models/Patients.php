<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_uid',
        'full_name',
        'id_number',
        'phone',
        'address',
        'gender',
        'staffs_id',
    ];
}
