<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestEditProfile extends TestCase
{
       
    public function testEditProfileWorks()
    {
        $user = factory(\Opencasts\User::class)->create();

        $this->actingAs($user)
            ->visit('/profile')

            ->type('newusername', 'username')
            ->type('yemisi@gmail.com', 'email')
            ->press('update')

            ->see('Profile updated!')
            ->see('newusername')
            ->see('yemisi@gmail.com');

    }
}
