<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_sell extends Model
{
    //
    protected $fillable = [
    'sell_name',
    'sell_phone',
    'ID_line',
    'showroom',
    'province',
    'image'
    ];
}
