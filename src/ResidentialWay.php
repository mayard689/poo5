<?php
require_once 'HighWay.php';

class ResidentialWay extends HighWay
{

    public function __construct()
    {
        $this->setNbLane(2);
        $this->setMaxSpeed(50);
    }

    public function addVehicle(vehicle $vehicle) : string
    {
        $this->vehicle[]=$vehicle;
        return "Vehicule ".get_class($vehicle)." ajouté à Residentialway";
    }
}