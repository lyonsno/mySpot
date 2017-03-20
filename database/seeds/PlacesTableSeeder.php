<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	DB::table('places')->insert([
    		'name' => str_random(10),
    		'address' => str_random(5),
    		'tags'
    		'category' => str_random(5),
    		])
        
    }
}
