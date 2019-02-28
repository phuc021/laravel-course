<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Model\Post::class, function (Faker $faker) {
	$user_id = DB::table('users')->pluck('id');
    return [
        'user_id' => $faker->randomElement($user_id),
    ];
});
