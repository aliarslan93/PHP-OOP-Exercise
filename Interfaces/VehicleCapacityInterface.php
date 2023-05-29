<?php

namespace Interfaces;

interface VehicleCapacityInterface
{
    public function increaseCapacity(int $count);

    public function decreaseCapacity(int $count);
}