<?php

namespace Magic\Magic;
require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

//daughters
$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox(['Sandwich','Papas','Jugo de naranja','Manzana']);

// Paso por valor
$joanie->setLunch($lunchBox);

// School
$joanie->eatMeal();

