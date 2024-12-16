<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderAr extends Model
{
    protected $fillable = [
        'text1',
        'text2',
        'button_text',
        'button_url',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'ar_slider';

    public function getImageUrlAttribute()
    {
        return asset('uploads/slider/' . $this->image);
    }
}
