<?php

// namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MySpotSeeder extends Seeder {

	public function run() {

		// clear database
		DB::table('spots')->delete();
		DB::table('compilations')->delete();
		DB::table('users')->delete();
		DB::table('tags')->delete();

		DB::table('compilation_user')->delete();
		DB::table('compilation_spot')->delete();

		(new Faker\Generator)->seed(123);

		factory(App\User::class, 3)->create()->each(function ($user)
			{
				$user->createdSpots()->save(factory(App\Spot::class)->make());
			});

		// factory(App\Spot::class, 8)->create();
		factory(App\Compilation::class, 1)->create();


		// ->each(function ($compilation)
		// 	{
		// 		$compilation->spots()->save(factory(App\Spot::class)->make());
		// 	});
		
		// seed spots table

		// $spotPuccini = App\Spot::create(array(
		// 	'name'		=> 'Puccini',
		// 	'address'	=> 'Dogpatch',
		// 	'notes'		=> 'One day we gotta go here'
		// ));

		// $spotChezMaman = App\Spot::create(array(
		// 	'name'		=> 'Chez Maman',
		// 	'address'	=> 'Potrero',
		// 	'notes'		=> 'SALAD'
		// ));
		
		// $this->command->info('gotsa some spotsa');

		// seed users table

		// $userNoah = App\User::create(array(
		// 	'name'		=> 'Noah',
		// 	'password'	=> 'gogogo'
		// ));

		// $userCristina = App\User::create(array(
		// 	'name'		=> 'Cristina',
		// 	'password'	=> 'fiftyshades'
		// ));
		
		// $this->command->info('made users');

		// seed tags table

	}
}