<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'community_id',
        'user_id',
    ];

    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function media()
    {
        return $this->hasMany(PostMedia::class);
    }

    public function votes()
    {
        return $this->hasMany(PostVote::class);
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }
}
