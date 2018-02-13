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

$carbon = new \Carbon\Carbon();

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) use ($carbon) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => preg_replace('/@example\..*/', '@sheetz.nl', $faker->unique()->safeEmail),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => $carbon->now(),
        'updated_at' => $carbon->now()
    ];
});
