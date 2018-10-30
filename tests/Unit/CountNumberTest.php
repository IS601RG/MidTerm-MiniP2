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
       /** @test */
    public function CountNumberTest()
    {
        $users = User::all();
        $recordCountNumber = $users->count();
        $this->assertEquals(50, $recordCountNumber);
    }
}
