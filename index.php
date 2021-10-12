<?php

require_once 'Bicycle.php';
$bike = new Bicycle("Black");
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

require_once 'SimpsonsCars.php';
$car = new SimpsonsCars("blue", 4, "Electric");
$car->setCurrentSpeed(0);
var_dump($car);

echo $car->forward();
echo '<br> Vitesse du vélo : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du vélo : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
