<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newjemaat extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'notelp',
        'alamat',
        'email',
        'asal',
        'file',
        'keterangan',
    ];
}
