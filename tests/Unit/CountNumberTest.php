<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class CountNumberTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function CountNumberTest()
    {
        $users = User::all();
        $recordCountNumber = $users->count();
        $this->assertTrue(50, $recordCountNumber);
    }
}
