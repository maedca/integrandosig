<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Post::class, function (Faker $faker) {
    $title= $faker->sentence(4);
    return [
        'user_id'=> rand(1,30),
        'category_id' => rand(1,20),
        'name' => $title,
        'slug'=>Str::slug($title, '-'),
        'excerpt'=>$faker->text(100),
        'body' =>$faker->text(500),
        'file' => $faker->imageUrl($width=1200, $height=400),
        'status' => $faker->randomElement(['PUBLISHED', 'DRAFT'])
    ];
});
