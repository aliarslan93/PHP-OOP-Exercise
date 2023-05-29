<?php

namespace Vehicles;

use Classes\Vehicle;

class Citroen extends Vehicle
{
    private $countryOfManufacture = "French";

    public function __construct($type, $capacity)
    {
        parent::__construct($type, $capacity);
    }

    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }
}