<?php

$factory->define(App\Spot::class, function (Faker\Generator $faker)
{
	return [
		'name' => $faker->name(),
		'address' => $faker->address(),
		'latitude' => $faker->latitude(),
		'longitude' => $faker->longitude(),
		'notes' => $faker->sentence(5)
	];
});