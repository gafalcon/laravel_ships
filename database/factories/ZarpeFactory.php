<?php

use Faker\Generator as Faker;

$factory->define(App\Zarpe::class, function (Faker $faker) {
    $capitan_ids = App\Capitan::pluck('id');
    $embarcacion_ids = App\Embarcacion::pluck('id');

    return [
        "embarcacion_id" => $embarcacion_ids->random(),
        "capitan_id" => $capitan_ids->random(), 
        "calidad" => "calidad",
        "fecha_salida" => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        "fecha_arribo" => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get())
        //
    ];
});
