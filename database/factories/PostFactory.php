<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'    => $faker->jobTitle,
        'content'  => $faker->text,
        'image_url'=> $faker->url,
        'user_id'  => $faker->randomDigitNotNull
    ];
});
