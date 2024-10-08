<?php
declare (strict_types=1);
namespace Adrian\Vehicle;

class Motorcycle extends Vehicle
{
    private int $engine_capacity;

    public function __construct(string $brand, string $model, string $transmission_type, int $engine_capacity)
    {
        parent::__construct($brand, $model, $transmission_type);
        $this->engine_capacity = $engine_capacity;
    }

    public function getEngineCapacity(): int
    {
        return $this->engine_capacity;
    }

    protected function getSpeedLimit(): float
    {
        return 180.0;
    }
}
