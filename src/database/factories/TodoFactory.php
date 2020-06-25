<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->paragraph,
        'is_complete' => (bool) rand(0, 1) == 1,
        'user_id' => $faker->numberBetween(1, 10)
    ];
});
