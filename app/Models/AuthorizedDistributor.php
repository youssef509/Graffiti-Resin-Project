<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorizedDistributor extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'city',
        'street',
        'shop_name',
        'shop_type',
        'shop_size',
        'shop_products',
    ];

    // Specify the table name explicitly
    protected $table = 'authorizeddistributor';

}
