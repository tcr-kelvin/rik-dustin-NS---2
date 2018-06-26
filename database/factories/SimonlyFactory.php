<?php

use Faker\Generator as Faker;

$factory->define(\App\Simonly::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(25),
        'sms' => $faker->randomNumber(3),
        'callmins' => $faker->randomNumber(3),
        'data' => $faker->randomNumber(3),
        'price' => $faker->randomNumber(3),

    ];
});
