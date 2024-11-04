<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogAr extends Model
{
    protected $fillable = [
        'title',
        'text1',
        'text2',
        'text3',
        'text4',
        'image'
    ];


    protected $table = 'ar_blog';

    public function getImageUrlAttribute()
    {
        return asset('uploads/blogs/' . $this->image);
    }
}
