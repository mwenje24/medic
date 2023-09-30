<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permisions extends Model
{
    use HasFactory;

    protected $fillable = [
        'permision_uid',
        'description',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
