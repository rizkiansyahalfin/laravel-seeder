<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    /** @use HasFactory<\Database\Factories\ReaderFactory> */
    use HasFactory;

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function bookClubs()
    {
        return $this->belongsToMany(BookClub::class, 'memberships');
    }

    public function creations()
    {
        return $this->hasMany(Creation::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

