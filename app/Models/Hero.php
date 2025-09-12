<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $table = 'hero';
    protected $fillable = ['photo', 'title', 'is_active'];

    public function toggle($id)
{
    $hero = \App\Models\Hero::findOrFail($id);
    $hero->is_active = !$hero->is_active; // ubah status
    $hero->save();

    return response()->json([
        'success' => true,
        'status'  => $hero->is_active
    ]);
}

}
