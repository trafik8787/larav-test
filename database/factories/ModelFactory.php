<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Meny::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {

    $image = $faker->image('/home/vitalik/laravel-site2/www/public/upload/image', $width = 640, $height = 480, '', false);

    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text($maxNbChars = 200),
        'image' => $image
    ];


});