<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    /** @use HasFactory<\Database\Factories\MembershipFactory> */
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'joined_at',
    ];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }
    public function bookClub()
    {
        return $this->belongsTo(BookClub::class);
    }
}
