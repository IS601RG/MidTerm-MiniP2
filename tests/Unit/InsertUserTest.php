<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserInsert()
    {
        $user = new User();
        $user->name = 'Riya';
        $user->email = 'rg329@njit.edu';
        $user->password = 'project01';

        $this->assertTrue($user->save());
    }
}
