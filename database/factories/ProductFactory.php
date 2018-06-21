<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph(50),
        'price' => $faker->numberBetween(1, 2000),
        // 'image' => $faker->file,
        'category_id' => $faker->numberBetween(1, 10),
    ];
});
