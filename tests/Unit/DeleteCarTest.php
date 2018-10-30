<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new Car();
        $car->make = 'Ford';
        $car->model = 'Non-Luxury';
        $car->year = '2002';
        $car->save();

        $this->assertTrue($car->delete());
    }
}
