<?php

require_once 'Objet.php';
$bike = new Bicycle("Black");
var_dump($bike);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$car = new SimpsonsCars("blue", 4, "Electric");
var_dump($car);

echo $car->forward();
echo '<br> Vitesse du vélo : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du vélo : ' . $car->currentSpeed . ' km/h' . '<br>';
echo $car->brake();