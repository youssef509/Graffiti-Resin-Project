<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectsAr extends Model
{
    protected $fillable = [
        'project_name',
        'project_customer',
        'project_category',
        'project_location',
        'project_date',
        'project_description1',
        'project_description2',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'ar_projects';

    public function getImageUrlAttribute()
    {
        return asset('uploads/projects/' . $this->image);
    }

    public function category() {
        return $this->belongsTo(related: Category::class);
    }

}
