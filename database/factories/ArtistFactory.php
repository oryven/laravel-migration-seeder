<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name'=> $faker -> firstName(),
        'surname' => $faker -> lastName(),
        'date_of_birth' => $faker->date(),
        'biography' => $faker -> text(300),
        'genre'=> $faker-> word(),
        'website'=> $faker->url()
    ];
});
