<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'namafile',
        'kode',
        'file',
    ];

    protected $table = 'promosis';
}
