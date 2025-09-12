<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;

    protected $table = 'aboutus'; // nama tabel di database

    protected $fillable = [
        'description',
        'photo',
        'is_active',
    ];
}
