<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use TCG\Voyager\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => 1,
        'category_id' => \App\Models\CategoryPost::inRandomOrder()->first()->id,
        'title' => $faker->title,
        'seo_title' => $faker->realText(200),
        'excerpt' => $faker->text,
        'body' => $faker->realText(200),
        'image' => $faker->imageUrl(1280, 850),
        'slug' => $faker->unique()->title,
        'meta_description' => $faker->text,
        'meta_keywords' => $faker->words(5, true),
        'status' => 'PUBLISHED',
        'created_at' => $faker->dateTimeBetween('-30 days', '-1 days'),
        'updated_at' => $faker->dateTimeBetween('-30 days', '-1 days'),
    ];
});
