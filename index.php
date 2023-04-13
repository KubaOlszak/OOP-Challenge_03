<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Motorway.php';
require_once 'Residentialway.php';
require_once 'Pedestrianway.php';


$cityCar = new Car('blue',4,'electric');
$bigCityCar = new Car('blue',5,'electric');
$break = new Car('red',8,'fuel');
$truck = new Car('black', 8, 'fuel');
$bike = new Bicycle('green', 1);
$bikeY = new Bicycle('yellow', 1);
$bikeR = new Bicycle('red', 1);


$autoroute = new Motorway();
$deuxVoies = new Residentialway();
$trottoir = new Pedestrianway();

$autoroute->addVehicles($break);
$autoroute->addVehicles($cityCar);

$deuxVoies->addVehicles($cityCar);
$deuxVoies->addVehicles($bike);  // ne devrait pas être comptabilisé

$trottoir->addVehicles($bikeY);
$trottoir->addVehicles($bikeR);
$trottoir->addVehicles($bigCityCar);

echo $break->start(10);
echo $break->forward(50);

echo "Sur l'autoroute il y a : " . $autoroute->getCurrentVehicles() . " véhicules <br>";
echo "Sur la 2 voies il y a : " . $deuxVoies->getCurrentVehicles() . " véhicules <br>";
echo "Sur le trottoir il y a : " . $trottoir->getCurrentVehicles() . " véhicules <br><br>";

var_dump($break);
var_dump($cityCar);
var_dump($bike);


?>
