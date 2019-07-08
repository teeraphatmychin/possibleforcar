<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_car extends Model
{
    //
    protected $fillable = [
        'brand', 'model','image',
        'year_model','price','type','title',
        'engine','detail','image',
        'status_car','id'
       ];
}
