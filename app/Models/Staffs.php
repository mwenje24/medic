<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_uid',
        'full_name',
        'staff_no',
        'title',
        'role'
    ];
}
