<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title'=> $faker -> name(),
        'date_release'=> $faker->date(),
        'tracks'=> $faker -> numberBetween(1, 30),    
        'name_artist' => $faker -> name(),
        'genre' => $faker -> word(),
        'description' => $faker -> text(300)
    ];
});
