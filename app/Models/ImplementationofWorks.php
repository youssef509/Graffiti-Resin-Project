<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImplementationofWorks extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'city',
        'client_category',
        'project_type',
        'building_type',
        'area_for_materials',
        'thickness',
        'image_need',
        'image',
        'floor_statue',
        'gaps',
    ];

    // Specify the table name explicitly
    protected $table = 'implementationofworks';

    public function getImageUrlAttribute()
    {
        return asset('uploads/quote/' . $this->image);
    }
}
