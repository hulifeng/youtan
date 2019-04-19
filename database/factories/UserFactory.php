<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$5Xcv/CJSnfHTBo1Lu/8dLufyCELc98x.VYvZ.KUquIR42Pv7pDAvq', // 111111
        'remember_token' => str_random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time
    ];
});