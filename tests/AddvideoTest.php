<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AddvideoTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAddvideo()
    {
        $user = factory(\Opencasts\User::class)->create();
        $this->actingAs($user)
            ->visit('/new')

            ->type('New video', 'title')
            ->type('http://youtube.com/watch?v=arfafrga', 'url')
            ->type('Test video added', 'description')
            ->select('PHP', 'category')
            ->press('add')

            ->see('Your video has been added')

            ->visit('/')
            ->see('New video');

    }
}
