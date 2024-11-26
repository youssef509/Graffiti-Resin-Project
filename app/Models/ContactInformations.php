<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInformations extends Model
{
    protected $fillable = [
        'phone',
        'email',
    ];

    // Specify the table name explicitly
    protected $table = 'contactinformation';
}
