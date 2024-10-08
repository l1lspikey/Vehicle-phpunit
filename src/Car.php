<?php
declare (strict_types=1);
namespace Adrian\Vehicle;

class Car extends Vehicle
{
    private int $number_of_doors;

    public function __construct(string $brand, string $model, string $transmission_type, int $number_of_doors)
    {
        parent::__construct($brand, $model, $transmission_type);
        $this->number_of_doors = $number_of_doors;
    }

    public function getNumberOfDoors(): int
    {
        return $this->number_of_doors;
    }

    protected function getSpeedLimit(): float
    {
        return 240.0;
    }
}
