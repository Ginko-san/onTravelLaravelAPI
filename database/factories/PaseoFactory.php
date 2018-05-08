<?php

//use App\Paseo;
use Faker\Generator as Faker;

$factory->define(App\Paseo::class, function (Faker $faker) {
    return [
        //'type'      =>  'paseos',
        'name'          =>  $faker->word,
        'fecha'         =>  (string)$faker->date($format = 'Y-m-d', $max = 'now'),
        'localizacion'  =>  $faker->state,
        'latitud'       =>  '0',
        'longitud'      =>  '0',
        'telefono'      =>  '8888-8888',
        'website'       =>  $faker->url,
        'descripcion'   =>  $faker->realText($maxNbChars = 200, $indexSize = 2),
        'imagen'        =>  '',
        'costo'         =>  (string)$faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'categoria_id'  =>  '1',
    ];
});
