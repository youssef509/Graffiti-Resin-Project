<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderEn extends Model
{
    protected $fillable = [
        'En_text1',
        'En_text2',
        'En_button_text',
        'En_button_url',
        'En_image'
    ];

    // Specify the table name explicitly
    protected $table = 'En_slider';

    public function getImageUrlAttribute()
    {
        return asset('uploads/slider/' . $this->image);
    }
}
