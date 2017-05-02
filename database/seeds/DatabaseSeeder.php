<?php

use Illuminate\Database\Seeder;
use Illuminate\Databse\Eloquent\Model;

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


