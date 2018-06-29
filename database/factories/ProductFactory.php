<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(60),
        'description' => $faker->sentence,
        'price' => $faker->numberBetween(1, 2000),
        'category_id' => $faker->numberBetween(1, 5),
    ];
});
