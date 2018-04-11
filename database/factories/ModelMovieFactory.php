<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'rating' => $faker->randomDigitNotNull,
        'collection' => $faker->numberBetween(1000000,10000000)
    ];
});
