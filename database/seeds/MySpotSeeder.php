<?php

// namespace App;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MySpotSeeder extends Seeder {

	public function run() {

		// clear database
		DB::table('spots')->delete();
		DB::table('lists')->delete();
		DB::table('users')->delete();
		DB::table('tags')->delete();

		DB::table('list_user')->delete();
		DB::table('list_spot')->delete();

		$users = factory(App\User::class, 3)->create();
		$spots = factory(App\Spot::class, 8)->create();
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