<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = [
        'facebook',
        'instagram',
        'tiktok',
        'linkedin'
    ];

    // Specify the table name explicitly
    protected $table = 'socialmedialinks';
}
