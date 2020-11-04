<?php

/** @var Factory $factory */

use App\Model;
use App\Services;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Services::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(2,11),
        'service_name' => $faker->word,
        'price' => $faker->numberBetween($min = 1500, $max = 6000)
    ];
});
