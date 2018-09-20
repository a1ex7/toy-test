<?php

use Faker\Generator as Faker;

$factory->define(App\Voucher::class, function (Faker $faker) {
    return [
        'start_date' => $faker->dateTimeBetween('-2 month', '-1 month'),
        'end_date' => $faker->dateTimeBetween('-1 month', '+1 month'),
        'active' => true,
        'discount_id' => rand(1,4)
    ];
});
