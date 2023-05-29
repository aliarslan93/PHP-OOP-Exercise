<?php

namespace Abstracts;

abstract class VehiclesAbstractClass
{
    protected $run = false;

    public function engineStatus()
    {
        return $this->run;
    }

    public function runEngine()
    {
        $this->run = true;
    }

    public function stopEngine()
    {
        $this->run = false;
    }
}