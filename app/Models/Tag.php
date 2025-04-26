<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function books()
    {
        return $this->morphedByMany(Book::class, 'taggable');
    }

    public function creations()
    {
        return $this->morphedByMany(Creation::class, 'taggable');
    }

    public function bookClubs()
    {
        return $this->morphedByMany(BookClub::class, 'taggable');
    }
}
