<?php
require_once 'HighWay.php';

class MotorWay extends HighWay
{

    public function __construct()
    {
        $this->setNbLane(4);
        $this->setMaxSpeed(130);
    }

    public function addVehicle(vehicle $vehicle) : string
    {
            if ($vehicle instanceof Car){
                $this->vehicle[]=$vehicle;
                return "Vehicule ".get_class($vehicle)." ajouté à Motorway";
            }
            return "Vehicule ".get_class($vehicle)." interdit sur une MotorWay";
    }


}