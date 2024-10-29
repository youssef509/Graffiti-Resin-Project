<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsAr extends Model
{
    protected $fillable = [
        'product_name',
        'product_description',
        'product_pdf',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'Ar_products';

    public function getImageUrlAttribute()
    {
        return asset('uploads/products/' . $this->image);
    }
}
