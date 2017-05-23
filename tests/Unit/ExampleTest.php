<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User as User;
use App\Spot as Spot;
use App\Compilation as Compilation;
use App\Tag as Tag;
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
		// $this->faker = Faker\Factory::create();
	}
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNumUsersTest()
    {
    	Artisan::call('db:seed');
    	$numExpected = 10;
    	$this->assertEquals(count(User::all()), $numExpected);

    }

    public function test_compiliation_tag_relationship_created()
    {
    	$faker = Faker\Factory::create();
    	$tags = NULL;
    	$compilation = factory(Compilation::class, 1)->create()->each( function ($compilation) use ($faker, $tags) 
    	{
    		$this->$tags = $compilation->tags()->saveMany(factory(Tag::class, 2)->make());
    	})[0];

    	// dd($this->$test);

    	$this->assertDatabaseHas('compilation_tag', ['compilation_id' => $compilation->id]);
    	$this->assertDatabaseHas('compilation_tag', ['tag_id' => $this->$tags[0]->id]);
    	$this->assertDatabaseHas('compilation_tag', ['tag_id' => $this->$tags[1]->id]);
    }
}
