<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sakit extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'wijk',
        'notelp',
        'alamat',
        'email',
        'keterangan',
    ];
}
