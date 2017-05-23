<?php

// namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use Faker\Factory as Faker;

class MySpotSeeder extends Seeder {

	public function run() {

		// clear database
		DB::table('tags')->delete();
		DB::table('spots')->delete();
		DB::table('compilations')->delete();
		DB::table('users')->delete();

		DB::table('compilation_user')->delete();
		DB::table('compilation_spot')->delete();

		(new Faker\Generator)->seed(123);
		$faker = Faker\Factory::create();

		// App\User::create(['name' => 'stan', 'email' => 'noah@test.com', 'password' => 'gogogo']);

		// create users
		factory(App\User::class, 10)->create()->each( function ($user) use ($faker)
			{
				// generate a few spots for each one
				$user->createdSpots()->saveMany(factory(App\Spot::class, $faker->numberBetween(0, 3))->make());

				// generate a few tags (assigned to spots later)
				$user->tags()->saveMany(factory(App\Tag::class, $faker->numberBetween(0, 4))->make());
			});

		// create compilations 
		factory(App\Compilation::class, 3)->create()->each( function ($compilation) use ($faker)
		{
			// associate them with owners(users)
			$owner = App\User::all()->random();
			$compilation->owner()->associate($owner);
			$compilation->save();

			// add random spots to each one
			$compilation->spots()->saveMany(App\Spot::all()->random($faker->numberBetween(1, App\Spot::count())));

			// add random followers to each one
			$compilation->followers()->save($owner);
			$maxFollowers = (App\User::count() - 1);
			$compilation->followers()->saveMany(App\User::all()->where('id', '!=', $owner->id)->random($faker->numberBetween(1, $maxFollowers)));

			//add random tags to each one
			$compilation->tags()->saveMany(App\Tag::all()->random( $faker->numberBetween(1, App\Tag::count())));
		});

	}
}