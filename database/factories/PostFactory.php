<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(App\Post::class, function (Faker $faker) {
    // Get a random user
    $user = \App\User::inRandomOrder()->first();

    // generate fake data for post
    return [
        'user_id' => $user->id,
        'title' => $faker->sentence,
        'body' => $faker->text,
    ];
});
