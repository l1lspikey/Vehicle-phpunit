<?php

declare(strict_types=1);

namespace Adrian\Vehicle;

class Vehicle
{
    protected string $brand;
    protected string $model;
    protected float $speed;
    protected string $transmission_type;

    public function __construct(string $brand, string $model, string $transmission_type)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->transmission_type = $transmission_type;
        $this->speed = 0.0;
    }

    public function accelerate(float $amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Acceleration amount cannot be negative.");
        } //No debe permitir una velocidad negativa 
        $new_speed = $this->speed + $amount;
        $this->speed = min($new_speed, $this->getSpeedLimit()); //Ni superar límites establecidos para el tipo de vehículo.
    }

    public function brake(float $amount): void
    {
        if ($amount < 0) {
            throw new \InvalidArgumentException("Braking amount cannot be negative.");
        }
        $this->speed = max(0, $this->speed - $amount); //No debe reducir la velocidad por debajo de 0.
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }

    public function getTransmissionType(): string
    {
        return $this->transmission_type;
    }

    protected function getSpeedLimit(): float
    {
        return 200.0;
    }
}
