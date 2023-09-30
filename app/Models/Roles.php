<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_uid',
        'role_name',
        'permisions',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
