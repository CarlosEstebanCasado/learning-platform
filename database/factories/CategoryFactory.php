<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['PHP','JAVASCRIPT','JAVA', 'RUBY','PYTHON','AMAZON WEB SERVICES', 'CSS', 'HTML', 'MACHINE LEARNING', 'REACT', 'ANGULAR', 'LARAVEL', 'DISEÑO WEB', 'SQL', 'MONGODB']),
        'description' => $faker->sentence
    ];
});
