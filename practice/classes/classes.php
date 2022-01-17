<?php

require_once('./Car.php');

$bmw = new Car("Tiger");
$audi = new Car("Marussia");
$bmw->accelerate();
$bmw->accelerate();
$bmw->accelerate();
$bmw->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->accelerate();
$audi->fullStop();
var_dump($bmw, $audi);
