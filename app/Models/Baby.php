<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baby extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'wijk',
        'no_hp',
        'alamat',
        'email',
        'gender',
        'rs',
    ];
}
