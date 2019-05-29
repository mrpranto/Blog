<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Post::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::all()->random()->id,
        'category_id' => \App\Models\Category::all()->random()->id,
        'title' => $faker->jobTitle,
        'description' => $faker->realText(),
        'image' => $faker->imageUrl(),
    ];
});
