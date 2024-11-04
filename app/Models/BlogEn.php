<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogEn extends Model
{
    protected $fillable = [
        'title',
        'text1',
        'text2',
        'text3',
        'text4',
        'image'
    ];

    protected $table = 'en_blog';

    public function getImageUrlAttribute()
    {
        return asset('uploads/blogs/' . $this->image);
    }
}
