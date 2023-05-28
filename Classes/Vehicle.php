<?php

namespace Classes;

use Abstracts\VehiclesAbstractClass;
use Interfaces\VehicleCapacityInterface;
use Interfaces\VehicleColorInterface;

class Vehicle extends VehiclesAbstractClass implements VehicleCapacityInterface, VehicleColorInterface
{
    protected $capacity = 0;
    protected $color;
    public $type;

    public function __construct($type, $capacity)
    {
        $this->capacity = $capacity;
        $this->type = $type;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    public function increaseCapacity(int $count = 1)
    {
        $this->capacity += $count;
    }

    public function decreaseCapacity(int $count = -1)
    {
        $this->capacity -= $count;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
}