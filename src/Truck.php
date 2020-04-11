<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private $capacity;


    private $load=0;

    public function __construct(int $capacity, string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);

        $this->capacity=$capacity;

    }

    public function isFull() : string
    {
        return $this->load>=$this->capacity?'full':'in filling';
    }


    /**
     * @return int
     */
    public function getLoad(): int
    {
        return $this->load;
    }

    /**
     * @param int $load
     */
    public function setLoad(int $load): void
    {
        $this->load = $load;
    }


    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }


}