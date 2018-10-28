<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        //setting fields
        //'type' => $faker->randomElement(['seller', 'buyer']),
        'make' => $faker->randomElement($array = array ('Ford', 'Honda', 'Toyota')),
        'model' => $faker->randomElement($array = array ('Luxury', 'Non-Luxury', 'Classic')),
        'year' => $faker->year($max = 'now'),
    ];
});
