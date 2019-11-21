<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Color::class, function (Faker $faker) {
    $color = $faker->colorName;
    return [
        'name' => \Illuminate\Support\Str::slug($color),
        'title' => $color,
    ];
});
