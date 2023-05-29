<?php

namespace Vehicles;

use Classes\Vehicle;

class Ducati extends Vehicle
{
    private $countryOfManufacture = "Italy";

    public function __construct($type, $capacity)
    {
        parent::__construct($type, $capacity);
    }

    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }
}