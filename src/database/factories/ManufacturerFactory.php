<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\Manufacturer::class, function (Faker $faker) {
    $name = $faker->company;
    return [
        'name' => \Illuminate\Support\Str::slug($name),
        'title' => $name,
    ];
});
