<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutusAr extends Model
{
    protected $fillable = [
        'our_mission',
        'our_vision',
        'our_values',
    ];

    // Specify the table name explicitly
    protected $table = 'Ar_aboutus';
}
