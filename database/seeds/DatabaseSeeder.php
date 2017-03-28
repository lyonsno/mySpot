<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

    	$this->call('MySpotSeeder');
    	$this->command->info('MySpot seeds finished');
    }


}

// custom seeder class 
// TODO: move to file

class MySpotSeeder extends Seeder {

	public function run() {

		// clear database
		DB::table('spots')->delete();
		DB::table('lists')->delete();
		DB::table('users')->delete();
		DB::table('tags')->delete();

		DB::table('list_user')->delete();
		DB::table('list_spot')->delete();

		// seed spots table

		$spotPuccini = Spot::create(array(
			'name'		=> 'Puccini',
			'address'	=> 'Dogpatch',
			'notes'		=> 'One day we gotta go here',
		));

		$spotChezMaman = Spot::create(array(
			'name'		=> 'Chez Maman',
			'address'	=> 'Potrero',
			'notes'		=> 'SALAD'))
		));
	}
}
