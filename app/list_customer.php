<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_customer extends Model
{
    //
    protected $fillable = [
        'customer_name', 'customer_phone', 'image',
        'brand','model','year_model','interest','customer_status'
    ];
}
