<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = [
        'page_name',
        'meta_title',
        'meta_keywords',
        'meta_description'
    ];

    // Specify the table name explicitly
    protected $table = 'seo';
}
