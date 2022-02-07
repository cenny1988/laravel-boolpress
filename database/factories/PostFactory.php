<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> unique()->sentence(),
        'sub_title' => $faker -> unique()->sentence(),
        'author' => $faker -> name(),
        'release' => $faker -> optional()->date(),
        'place' => $faker -> optional()->city(),
        'img' => $faker -> word() . ".png",
        'content' => $faker -> text()
    ];
});
