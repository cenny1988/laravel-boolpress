<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Post extends Model
{
    protected $fillable = [

        'title',
        'sub_title',
        'author',
        'likes',
        'release',
        'place',
        'img',
        'content'
    ];

    public function category()
    {
        return $this -> belongsTo(Category::class);
    }
}
