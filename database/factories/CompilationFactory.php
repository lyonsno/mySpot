<?php

$factory->define(App\Compilation::class, function (Faker\Generator $faker)
{
	return [
		'name' => $faker->name()
		
	];
});


		