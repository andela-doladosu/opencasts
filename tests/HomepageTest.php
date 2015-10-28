<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomepageTest extends TestCase
{
    
    use DatabaseMigrations;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testHomepage()
    {
        $this->visit('/')
            ->see('opencasts')
            ->see('categories')
            ->see('youtube')
            ->dontSee('Laravel 5');
    }

    public function testLogin()
    {
        $this->visit('/login')
            ->see('facebook')
            ->see('twitter')
            ->see('github')

            ->type('me@mail.com', 'email')
            ->type('aervaerv', 'password')
            ->press('login')
            ->see('error')
            ->dontsee('logout');
    }

    public function testRegister()
    {
        $this->visit('/register')
            ->see('facebook')
            ->see('twitter')
            ->see('github')

            ->type('Dara', 'username')
            ->type('me@mail.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->press('register')
            ->dontsee('error')
            ->see('profile')
            ->see('logout');
    }
}
