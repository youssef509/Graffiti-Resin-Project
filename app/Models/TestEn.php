<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestEn extends Model
{
    protected $fillable = [
        'test1',
        'test2',
        'test3',
    ];

    protected $table = 'Test_en';
}
