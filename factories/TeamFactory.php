<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
    	'fullname' => $faker->name,
        'designation' => $faker->jobTitle,
        'email' => $faker->unique()->safeEmail,
        'mobile' => $faker->phoneNumber,
        'telephone' => $faker->e164PhoneNumber,
        'profile' => $faker->paragraph,
        'facebook_id' => $faker->unique()->freeEmail,
        'twitter_id' => $faker->unique()->freeEmail,
        'pinterest_id' => $faker->unique()->freeEmail,
        'team_img' => 'No image found',
        'status' => $faker->randomElement(['DEACTIVE', 'ACTIVE']),
    ];
});
