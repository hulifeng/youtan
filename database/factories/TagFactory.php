<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Tag::class, function (Faker $faker) {
    $name = substr(str_replace(" ", "", $faker->name), 0, 4);
    return [
        'name' => $name
    ];
});
