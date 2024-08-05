<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Huria extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'no_hp', 
        'alamat', 
        'email', 
        'gereja_asal',
        'file',
       'keluarga'
    ];
}
