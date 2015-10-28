<?php

use Opencasts\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestLogout extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogoutWorksCorrectly()
    {
        $user = factory(\Opencasts\User::class)->create();
        $this->actingAs($user)

            ->visit('/logout')
            ->see('login')
            ->see('register');
    }
}
