<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeAboutAr extends Model
{
    protected $fillable = [
        'text1',
        'text2',
        'item1',
        'item2',
        'item3',
        'item4',
        'item5',
        'image1',
        'image2'
    ];

    // Specify the table name explicitly
    protected $table = 'ar_homeabout';

    public function getImageUrlAttribute()
    {
        return asset('uploads/homeabout/' . $this->image);
    }
}
