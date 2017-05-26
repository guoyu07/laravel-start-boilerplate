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
$factory->define(App\DAL\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\DAL\T_Member::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstNname,
        'last_name' => $faker->lastName,
        'tel' => $faker->phoneNumber,
        'email' => $faker->freeEmail,
        'password' => Hash::make('password'),
        'remember_token'    =>  'jCpDDE2Ia8IwOkQTyuwQaERCBqbLJVUppGOtBiQQ',
        'role'  =>  'USER'
    ];
});

$factory->state(App\DAL\T_Membe::class, 'admin', function ($faker) {
    return [
        'role' => 'ADMIN',
    ];
});

