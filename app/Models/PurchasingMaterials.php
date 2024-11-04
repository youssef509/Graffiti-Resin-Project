<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchasingMaterials extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'city',
        'client_category',
        'products_to_by',
        'area_for_materials',
        'thickness',
        'image_need',
        'image',
    ];

    // Specify the table name explicitly
    protected $table = 'purchasing_materials';

    public function getImageUrlAttribute()
    {
        return asset('uploads/quote/' . $this->image);
    }
}
