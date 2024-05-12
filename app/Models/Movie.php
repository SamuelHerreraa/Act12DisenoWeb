<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'category', 'relase_date', 'general_review', 'season'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}