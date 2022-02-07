<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillalble = [

        'title',
        'sub_title',
        'author',
        'release',
        'place',
        'img',
        'content'
    ];
}
