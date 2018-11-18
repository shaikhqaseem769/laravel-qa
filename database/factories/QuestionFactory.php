<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Question::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 10)), "."), // to remove last . from sentence
        'body' => $faker->paragraphs(rand(3, 7) , true), // paragraphs bydefault return array so pass second argument true as taking it new line
        'views' => rand(0, 10),
        'answers' => rand(0, 10),
        'votes' => rand(-3, 10)

    ];
});
