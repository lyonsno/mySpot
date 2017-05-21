<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User as User;
use App\Spot as Spot;
use Faker;
use Artisan;

class ExampleTest extends TestCase
{
	// use DatabaseTransactions;

	public function setUp()
	{
		parent::setUp();

		$this->prepareForTests();
		
		// $this->runDatabaseMigrations();
		// Artisan::call('migrate:refresh');
		(new Faker\Generator)->seed(123);
		$faker = Faker\Factory::create();
    	$this->test = factory(User::class, 3)->create()->each( function ($user)
    		use ($faker)
    		{
    	
    			$user->createdSpots()->saveMany(factory(Spot::class, 2)->make());
    		});

	}
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
    	// User::unguard();


    	dump($this->test);
        $this->assertTrue(true);
    }
}
