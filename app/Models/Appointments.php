<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_uid',
        'patients_id',
        'staffs_id',
        'appointment_date',
        'appointment_satus'
    ];
}
