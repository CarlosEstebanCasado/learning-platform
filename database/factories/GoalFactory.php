<?php

use App\Course;
use Faker\Generator as Faker;

$factory->define(App\Goal::class, function (Faker $faker) {
    return [
        'course_id' => Course::all()->random()->id,
        'goal'  => $faker->sentence,
    ];
});
