<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsstfkary extends Model
{


    protected $table = 'tsstfkary';
    protected $primaryKey = 'kdkary';

    public $timestamps = false; 

    use HasFactory;

    protected $fillable = [
        'kdkary',
        'nama',
        'email',
        'phone',
        'kddvsi',
        'dob',
        'regdt',
        'alamat'
    ];
}
