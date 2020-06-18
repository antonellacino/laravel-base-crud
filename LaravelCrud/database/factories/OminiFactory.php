<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Omino;
use Faker\Generator as Faker;

$factory->define(Omino::class, function (Faker $faker) {
    return [
        'firstname' =>$faker->firstName('firstname'),
        'lastname'  =>$faker->lastName('lastname'),
        'address'   =>$faker->streetAddress('address'),
        'code'      =>$faker->postcode('code'),
        'state'     =>$faker->country('state'),
        'phone'     =>$faker->phoneNumber('phone'),
        'role'      =>$faker->word('role'),
    ];
});
