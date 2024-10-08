<?php
declare (strict_types=1);
namespace Adrian\Vehicle;

class Truck extends Vehicle
{
    private float $load_capacity;

    public function __construct(string $brand, string $model, string $transmission_type, float $load_capacity)
    {
        parent::__construct($brand, $model, $transmission_type);
        $this->load_capacity = $load_capacity;
    }

    public function getLoadCapacity(): float
    {
        return $this->load_capacity;
    }

    protected function getSpeedLimit(): float
    {
        return 120.0;
    }
}
