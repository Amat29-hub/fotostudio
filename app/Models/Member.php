<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // hanya field ini yang boleh diisi lewat mass assignment
    protected $fillable = [
        'name',
        'price',
        'deadline',
    ];
}
