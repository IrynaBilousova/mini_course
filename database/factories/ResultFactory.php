<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Result;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(Result::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'seconds' => random_int(10, 100),
        'points' => random_int(0 ,4),
        'avatar' => Str::random(10)
    ];
});
