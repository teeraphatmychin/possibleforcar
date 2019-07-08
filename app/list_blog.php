<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class list_blog extends Model
{
    //
    protected $fillable = [
        'blog_id', 'subject', 'post_by','article'
       ];
}
