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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Company::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->text,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Station::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->name,
        'lat' => $faker->latitude(45, 50),
        'long' => $faker->longitude(50, 80),
        'company_id' => mt_rand(1, 10),
        'city_id' => mt_rand(1, 10),
        'phone' => $faker->phoneNumber,
        'address' => $faker->streetAddress,
        'email' => $faker->email
    ];
});

