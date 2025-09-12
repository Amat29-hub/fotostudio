<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries'; // nama tabel

    protected $fillable = [
        'title',
        'description',
        'photo',
        'is_active',
    ];
}
