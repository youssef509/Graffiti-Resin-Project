<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonialAr extends Model
{
    protected $fillable = [
        'text',
        'person',
        'position',
        'image'
    ];
    // Specify the table name explicitly
    protected $table = 'Ar_testimonial';

    public function getImageUrlAttribute()
    {
        return asset('uploads/testimonial/' . $this->image);
    }
}
