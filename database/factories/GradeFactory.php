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

$factory->define(CollegePortal\Models\Grade::class, function (Faker $faker) {
    return [
        'score' => $faker->numberBetween(20, 40),
        'description' => $faker->unique()->randomElement([
            'Test 1',
            'Test 2',
            'Test 3',
            'Test 4',
            'Test 5',
        ])
    ];
});
