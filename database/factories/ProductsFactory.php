<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'image' => $faker->imageUrl(300,200),
        'price' => $faker->randomFloat(2, 2, 100),
    ];
});
