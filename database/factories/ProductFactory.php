<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'price' => rand(100, 5000),
        'active' => true,
    ];
});
