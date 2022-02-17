<?php
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('blue', 4, 'azddadzad');

$truck = new Truck('blue', 4, 52, 2);
//echo $car->forward();
var_dump($truck);

$truck->forward();
$truck->brake();
$truck->isFull();

echo $truck->isFull();

