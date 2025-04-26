<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookClub extends Model
{
    /** @use HasFactory<\Database\Factories\BookClubFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function members()
    {
        return $this->belongsToMany(Reader::class, 'memberships');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
