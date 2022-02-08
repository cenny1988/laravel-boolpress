<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\Tag;

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

    public function tags()
    {
        return $this -> belongsToMany(Tag::class);
    }
}
