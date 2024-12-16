<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsEn extends Model
{
    protected $fillable = [
        'product_name',
        'product_description',
        'product_pdf',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'en_products';

    public function getImageUrlAttribute()
    {
        return asset('uploads/products/' . $this->image);
    }
}
