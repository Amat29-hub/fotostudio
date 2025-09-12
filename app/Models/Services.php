<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services'; // nama tabel di database

    protected $fillable = [
        'title',
        'description',
        'photo',
        'is_active',
    ];
}
