<?php
require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Adrian\Vehicle\Motorcycle;

class MotorcycleTest extends TestCase
{

    public function test_it_should_assign_engine_capacity()
    {
        $motorcycle = new Motorcycle('Honda', 'CBR', 'manual', 600);
       
        $this->assertEquals(600, $motorcycle->getEngineCapacity());
    }

    public function test_it_should_respect_speed_limit()
    {
        $motorcycle = new Motorcycle('Honda', 'CBR', 'manual', 600);
        $motorcycle->accelerate(200);
        
        $this->assertEquals(180.0, $motorcycle->getSpeed());
    }
}
