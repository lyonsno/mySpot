<?php

$factory->define(App\Tag::class, function (Faker\Generator $faker)
{
	return [
		'text' => $faker->safeColorName
	];
});