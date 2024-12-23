<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partiners extends Model
{
    protected $fillable = [
        'image',
        'alt'
    ];

    // Specify the table name explicitly
    protected $table = 'partiners';

    public function getImageUrlAttribute()
    {
        return asset('uploads/partiners/' . $this->image);
    }
}
