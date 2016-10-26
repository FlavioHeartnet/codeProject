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
$factory->define(codeProject\Entities\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(codeProject\Entities\Client::class, function (Faker\Generator $faker) {


    return [
        'name' => $faker->name,
        'responsable' => $faker->name,
        'adress' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'obs' => $faker->sentence,

    ];
});

$factory->define(codeProject\Entities\Project::class, function (Faker\Generator $faker) {


    return [
        'owner_id' => rand(1,5),
        'client_id'=>rand(1,12),
        'name' => $faker->word,
        'description' => $faker->sentence(),
        'progress' => $faker->numberBetween(1,100),
        'status' => $faker->numberBetween(1,3),
        'due_date' => $faker->date("y-m-d")


    ];
});

$factory->define(codeProject\Entities\ProjectNote::class, function (Faker\Generator $faker) {


    return [
        'project_id' => rand(1,12),
        'contend' => $faker->sentence(),
        'title' => $faker->word,
        'note' => $faker->sentence()


    ];
});
