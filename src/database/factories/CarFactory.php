<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Car::class, function (Faker $faker) {
    return [
        'color_id' => \App\Models\Color::inRandomOrder()->first()->id,
        'manufacturer_id' => \App\Models\Manufacturer::inRandomOrder()->first()->id,
        'model' => $faker->company,
        'price' => rand(1000, 999999),
    ];
});
