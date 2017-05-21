<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Config;
use Artisan;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function prepareForTests(){
    	// Config::set('database.default', 'sqlite');
    	Artisan::call('migrate:refresh');
    }
}
