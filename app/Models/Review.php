<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    protected $fillable = [
        'rating',
        'body',
    ];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function comments()
    {
        return $this->morpMany(Comment::class, 'commentable');
    }
}
