<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Adrian\Vehicle\Car;

class CarTest extends TestCase
{

    public function test_it_should_assign_number_of_doors()
    {
        $car = new Car('Toyota', 'Corolla', 'manual', 4);
        
        $this->assertEquals(4, $car->getNumberOfDoors());
    }

    public function test_it_should_respect_speed_limit()
    {
        $car = new Car('Toyota', 'Corolla', 'manual', 4);
        $car->accelerate(300);
        
        $this->assertEquals(240.0, $car->getSpeed());
    }
}
