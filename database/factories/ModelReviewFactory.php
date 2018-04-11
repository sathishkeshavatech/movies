<?php

use Faker\Generator as Faker;
use App\Model\Movie;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
    	'movie_id' => function() {
    		return Movie::all()->random();
    	},
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'rating' => $faker->randomDigitNotNull
    ];
});
