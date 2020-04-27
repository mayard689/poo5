<?php


require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;

        $this->hasParkBrake=true;
    }

    /**
     * @return bool
     */
    public function hasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
        return $hasParkBrake?"remettons ce frein à main":"Enlevons ce frein à main";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start(): string
    {
        if($this->hasParkBrake){
            throw new Exception("ParkBrake is set");
        }

        return "C'est parti, tout se passe bien !";
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}