<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_us extends Model
{
    //
    protected $fillable = [
        'contact_name','contact_mail','subject',
        'message'

    ];
}
