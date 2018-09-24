<?php

use Faker\Generator as Faker;

$factory->define(App\Pekerjaan::class, function (Faker $faker) {
    return [
        //
        'tempat_kerja' => $faker->name,
        'alamat_kerja' => $faker->address,
    ];
});
