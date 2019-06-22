<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [

        'Title' => $faker->title,
        'article' => Str::random(10), 
        'approval' => '1',
       ];
});
