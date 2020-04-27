<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn()
    {
        return $this->getCurrentSpeed()>10?true:false;
    }

    public function switchOff()
    {
        return false;
    }


}