<?php

namespace Vehicles;

use Classes\Vehicle;

class Bmw extends Vehicle
{

    private $countryOfManufacture = "Germany";

    public function __construct($type, $capacity)
    {
        parent::__construct($type, $capacity);
    }

    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }
}