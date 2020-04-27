<?php
require_once '../src/MotorWay.php';
require_once '../src/PedestrianWay.php';
require_once '../src/ResidentialWay.php';
require_once '../src/Car.php';
require_once '../src/Bicycle.php';


$motorway = new MotorWay();
$pedestrianway = new PedestrianWay();
$residentialway = new ResidentialWay();

$bike=new Bicycle("blue",1);
$car=new Car("red",2,"fuel");


echo $motorway->addVehicle($bike)."<br>";
echo $motorway->addVehicle($car)."<br>";

echo $residentialway->addVehicle($bike)."<br>";
echo $residentialway->addVehicle($car)."<br>";

echo $pedestrianway->addVehicle($bike)."<br>";
echo $pedestrianway->addVehicle($car)."<br>";

echo "<br>";

echo "C'est l'heure d'aller chez Moe"."<br>";
try{
    echo $car->start()."<br>";;
} catch (Exception $e){
    if ($e->getMessage()=="ParkBrake is set") {
        echo "Quelque chose ne va pas, ça alors, j'ai encore oublié d'enlever le frein à main."."<br>";
        echo $car->setParkBrake(false)."<br>";;
    }
} finally {
    echo "Avec ou sans frein, ma voiture roule comme un donut !"."<br>"."<br>";
}

echo "les feux de la voiture sont dans l'état : ".($car->switchOn()?'allumé':'éteint')."<br>";
echo "les feux de la voiture sont dans l'état : ".($car->switchOff()?'allumé':'éteint')."<br>";

$bike->setCurrentSpeed(5);
echo "le velo roule à ".$bike->getCurrentSpeed()." les feux du vélo sont dans l'état : ".($bike->switchOn()?'allumé':'éteint')."<br>";
$bike->setCurrentSpeed(15);
echo "le velo roule à ".$bike->getCurrentSpeed()." les feux du vélo sont dans l'état : ".($bike->switchOn()?'allumé':'éteint')."<br>";
echo "les feux du vélo sont dans l'état : ".($bike->switchOff()?'allumé':'éteint')."<br>";