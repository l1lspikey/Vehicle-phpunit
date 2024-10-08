<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Adrian\Vehicle\Truck;

class TruckTest extends TestCase
{

    public function test_it_should_assign_load_capacity()
    {
        $truck = new Truck('Ford', 'F-150', 'automatic', 5.0);
        
        $this->assertEquals(5.0, $truck->getLoadCapacity());
    }

    public function test_it_should_respect_speed_limit()
    {
        $truck = new Truck('Ford', 'F-150', 'automatic', 5.0);
        $truck->accelerate(150);
        
        $this->assertEquals(120.0, $truck->getSpeed());
    }
}
