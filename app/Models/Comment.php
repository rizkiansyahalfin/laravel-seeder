<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /** @use HasFactory<\Database\Factories\CommentFactory> */
    use HasFactory;

    protected $fillable = [
        'body',
    ];
    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
