<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    use HasFactory;

    protected $fillable = [
        'github_url', 
        'youtube_url',
        'tiktok_url',
        'facebook_url',
        'instagram_url',
        'twitter_url',
    ];
}
