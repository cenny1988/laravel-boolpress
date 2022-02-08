<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [

        'name',
        'descript'
    ];

    public function category()
    {
        return $this -> belongsTo(Category::class);
        // return $this -> belongsTo('App\Category');   <-----> Metodo equivalente
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
