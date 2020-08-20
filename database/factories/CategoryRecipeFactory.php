<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CategoryRecipe;
use Faker\Generator as Faker;

$factory->define(CategoryRecipe::class, function (Faker $faker) {
    return [
        'title'=> $faker->realText(rand(10, 40)),
        'slug' => 'someslug',
        'content' => $faker->text(400),
        'meta_title' => $faker->realText(rand(10, 100)),
        'meta_desc' => $faker->text(500),
        'status' => $faker->boolean(15)
    ];
});
