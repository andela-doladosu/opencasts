<?php

use Illuminate\Support\Facades\Artisan;

class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://127.0.0.1';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    
    public function setUp()
    {
        parent::setUp();
        $this->prepareForTests();
    }
    

    public function prepareForTests()
    {
        Config::set('database.default', 'sqlite'); 
        Artisan::call('migrate:refresh');
    }

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}
