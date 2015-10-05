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

use App\Providers\AuthServiceProvider;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'company' => $faker->company,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'is_admin' => $faker->boolean,
        'email_confirmed' => $faker->boolean,
        'email_confirmation_uuid' => openssl_random_16char(),
        'remember_token' => str_random(10),
    ];
});
