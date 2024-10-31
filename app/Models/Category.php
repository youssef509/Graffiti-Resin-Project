<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'ar_name',
        'eng_name',
    ];

    // Specify the table name explicitly
    protected $table = 'category';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $lastCategory = Category::orderBy('category_id', 'desc')->first();
            $category->category_id = $lastCategory ? $lastCategory->category_id + 1 : 1;
        });
    }
}
