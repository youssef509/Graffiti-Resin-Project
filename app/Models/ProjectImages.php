<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    protected $fillable = [
        'project_name',
        'image'
    ];

    // Specify the table name explicitly
    protected $table = 'projectimages';

    public function getImageUrlAttribute()
    {
        return asset('uploads/projects/' . $this->image);
    }

}
