<?php
require_once 'HighWay.php';

class PedestrianWay extends HighWay
{

    public function __construct()
    {
        $this->setNbLane(1);
        $this->setMaxSpeed(10);
    }

    public function addVehicle(vehicle $vehicle) : string
    {
        if ($vehicle instanceof Bicycle or $vehicle instanceof Skateboard){
            $this->vehicle[]=$vehicle;
            return "Vehicule ".get_class($vehicle)." ajouté à Pedestrianway";
        }
        return "Vehicule ".get_class($vehicle)." interdit sur une PedestrianWay";
    }


}