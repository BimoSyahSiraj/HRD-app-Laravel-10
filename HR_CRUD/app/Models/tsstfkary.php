<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsstfkary extends Model
{
    use HasFactory;

    protected $fillable = [
        'kdkary',
        'nama',
        'email',
        'phone',
        'kddvsi',
        'dob',
        'regdt'
    ];
}
