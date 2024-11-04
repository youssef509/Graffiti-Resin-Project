<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingSupervision extends Model
{
    protected $fillable = [
        'name',
        'age',
        'phone',
        'city',
        'specialization',
        'current_job',
        'reason'
    ];

    // Specify the table name explicitly
    protected $table = 'training_supervision';
}
