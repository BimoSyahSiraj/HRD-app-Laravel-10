<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tsstdvsis extends Model
{

    protected $table = 'tsstfkary'; 
    protected $primaryKey = 'kddvsi'; 

    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'kddvsi',
        'nama',
        'dvsic'
    ];
}
