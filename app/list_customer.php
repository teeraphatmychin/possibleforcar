<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_customer extends Model
{
    //
    protected $fillable = [
        'customer_name', 'customer_phone', 'image','id',
        'brand','model','customer_status'
        ,'customer_line','sell_name'
    ];
}
