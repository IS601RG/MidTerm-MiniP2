<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\Car;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::find(4);
        $carmodel = (string)$car->model;
        $this->assertInternalType('string', $carmodel);
    }
}
