<?php

namespace Magic\Magic;
require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

//daughters
$joanie = new User(['name' => 'Joanie']);

$haley = new User(['name' => 'Haley']);

$lunchBox = new LunchBox(['Sandwich']);
$lunchBox2 = clone $lunchBox;

// Paso por referencia
// $lunchBox = new LunchBox(['Sandwich','Manzana']);
// $joanie->setLunch($lunchBox);
// $haley->setLunch($lunchBox);

// Paso por valor
$joanie->setLunch(clone $lunchBox);
$haley->setLunch($lunchBox2);

// School
$haley->eat();
$joanie->eat();

var_dump($lunchBox,$lunchBox2);
