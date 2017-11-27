<?php

use Faker\Generator as Faker;

$factory->define(App\Capitan::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'cedula' => $faker->unique()->creditCardNumber,
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'image' => $faker->imageUrl($width = 640, $height = 480)

        //
    ];
});
