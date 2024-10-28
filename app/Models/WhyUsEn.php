<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhyUsEn extends Model
{
    protected $fillable = [
        'title1',
        'title2',
        'text1',
        'text2',
        'video_url',
        'image'
    ];
    // Specify the table name explicitly
    protected $table = 'En_whyus';

    public function getImageUrlAttribute()
    {
        return asset('uploads/whyus/' . $this->image);
    }
}
