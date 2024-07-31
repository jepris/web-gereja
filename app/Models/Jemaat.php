<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'birth_date', 
        'alamat', 
        'notelp',
        'umur'
    ];
    // protected $date = [
        
    // ];
}