<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Bookable;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$suffix = [
    "Villa",
    "House",
    "Cottage",
    "Luxury Villa",
    "Cheap house",
    "Rooms"
];

$factory->define(Bookable::class, function (Faker $faker) use ($suffix){
    return [
        'title' => $faker->city . ' ' . Arr::random($suffix),
        'description' => $faker->text()
    ];
});
