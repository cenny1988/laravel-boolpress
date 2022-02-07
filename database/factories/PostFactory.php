<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        
        'title' => $faker -> unique()->sentence(),
        'sub_title' => $faker -> unique()->sentence(),
        'author' => $faker -> name(),
        'likes' => $faker -> numberBetween(0, 5000),
        'place' => $faker -> optional()->city(),
        'img' => $faker -> optional()->word() . ".png",
        'content' => $faker -> text()
    ];
});
