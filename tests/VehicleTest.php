<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Adrian\Vehicle\Vehicle;

class VehicleTest extends TestCase
{

    public function test_it_should_have_initial_speed_zero()
    {
        $vehicle = new Vehicle('Toyota', 'Corolla', 'manual');
        
        $this->assertEquals(0.0, $vehicle->getSpeed());
    }

    public function test_it_should_accelerate_correctly()
    {
        $vehicle = new Vehicle('Toyota', 'Corolla', 'manual');
        $vehicle->accelerate(0.0);
        
        $this->assertEquals(0.0, $vehicle->getSpeed());
    }

    public function test_it_should_brake_correctly()
    {
        $vehicle = new Vehicle('Toyota', 'Corolla', 'manual');
        $vehicle->accelerate(50);
        $vehicle->brake(20);
        
        $this->assertEquals(30.0, $vehicle->getSpeed());
    }

    public function test_it_should_not_allow_negative_braking()
    {
        $this->expectException(InvalidArgumentException::class);
        
        $vehicle = new Vehicle('Toyota', 'Corolla', 'manual');
        $vehicle->brake(-10);
    }

    public function test_it_should_return_transmission_type()
    {
        $vehicle = new Vehicle('Toyota', 'Corolla', 'automatic');
       
        $this->assertEquals('automatic', $vehicle->getTransmissionType());
    }
}
