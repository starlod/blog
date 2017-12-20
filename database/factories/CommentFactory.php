<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'post_id' => function() {
            return App\Models\Post::inRandomOrder()->first()->id;
        },
        'author_name' => $faker->name,
        'body' => $faker->text,
    ];
});
