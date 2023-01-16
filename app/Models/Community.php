<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'logo',
        'banner',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'community_users', 'community_id', 'user_id')->withTimestamps();
    }
}
