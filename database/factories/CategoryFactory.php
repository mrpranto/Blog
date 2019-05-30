<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Category::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::all()->random()->id,
        'name' => $faker->colorName,
        'description' => $faker->text,
    ];
});
