<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDelete()
    {
        $user = new User();
        $user->name = 'Riya';
        $user->email = 'rg329@njit.edu';
        $user->password = 'secret';
        $user->save();

        $this->assertTrue($user->delete());
    }
}
