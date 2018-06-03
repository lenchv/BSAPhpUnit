<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->randomElement(['BMW', 'Mercedes', 'ZAZ']),
        'model' => $faker->randomElement(['x3', 'x5', 'x6']),
        'price' => $faker->randomFloat()
    ];
});
