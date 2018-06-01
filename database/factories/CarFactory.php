<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Entity\Car::class, function (Faker $faker) {
    return [
        'brand' => $faker->randomElement(['BMW', 'Mercedes', 'ZAZ']),
        'model' => $faker->randomElement(['x3', 'x5', 'x6']),
        'price' => $faker->randomFloat()
    ];
});
