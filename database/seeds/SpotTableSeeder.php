<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SpotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    	DB::table('spot')->insert([
    		'name' => str_random(10),
    		'address' => str_random(5),
    		'tags' => str_random(5),
    		'category' => str_random(5),
    		]);
        
    }
}
