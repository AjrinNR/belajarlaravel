<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'code' => $faker -> unique -> numberBetween(1,1000),
        'name'=> $faker-> name,
        'email'=> $faker -> freeemail,
        'country' => $faker -> country,
        'city' => $faker -> city,
        'address' => $faker -> address,
        'contact_number' => $faker -> unique -> tollFreePhoneNumber,
    ];
});
