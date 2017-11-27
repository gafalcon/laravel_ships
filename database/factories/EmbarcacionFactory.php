<?php

use Faker\Generator as Faker;

$factory->define(App\Embarcacion::class, function (Faker $faker) {
    return [
        "codigo_barco" => $faker->unique()->uuid,
        "nombre" => $faker->word,
        "tipo" => $faker->randomElement($array = array ('1','2')),
        "capacidad" => $faker->numberBetween($min = 1000, $max = 9000),
        "dimensiones" => "dim",
        'photo' => $faker->imageUrl($width = 640, $height = 480)
        //
    ];
});
