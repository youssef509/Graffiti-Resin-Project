<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderAr extends Model
{
    protected $fillable = [
        'Ar_text1',
        'Ar_text2',
        'Ar_button_text',
        'Ar_button_url',
        'Ar_image'
    ];

    // Specify the table name explicitly
    protected $table = 'Ar_slider';

    public function getImageUrlAttribute()
    {
        return asset('uploads/slider/' . $this->image);
    }
}
