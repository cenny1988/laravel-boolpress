<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        // return $this -> belongsTo('App\Category');   <-----> Metodo equivalente
    }

    public function tags()
    {
        return $this -> belongsToMany(Tag::class);
    }
}
