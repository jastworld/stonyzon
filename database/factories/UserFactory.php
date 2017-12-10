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

$factory->define(App\Item::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => 'Best Item In the world. Stonyzon only sells the best items',
        'price' => random_int(1,100000),
        'type' => random_int(1,3),
    ];
});

$factory->define(App\Inventory::class, function (Faker $faker) {

    return [
        'itemId' => 'factory:App\Item',
        'quantity' => random_int(20, 5000),
    ];
});
