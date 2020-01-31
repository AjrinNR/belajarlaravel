<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Form;
use Faker\Generator as Faker;

$factory->define(Form::class, function (Faker $faker) {
    return [
        'no_pendaftaran' => $faker -> unique -> numberBetween(1,500),
        'nama'=> $faker-> name,
        'email'=> $faker -> freeemail,
        'asal_sekolah' => $faker -> country,
        'jk' => $faker -> title,
        'tgl_lahir' => $faker -> date,
        'alamat' => $faker -> address,
        'nohp' => $faker -> unique -> tollFreePhoneNumber,
    ];
});
