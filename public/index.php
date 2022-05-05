<?php

namespace Magic\Magic;
require '../vendor/autoload.php';

$gordon = new User(['name' => 'Gordon']);

//daughters
$joanie = new User(['name' => 'Joanie']);

$lunchBox = new LunchBox(['Sandwich','Papas','Jugo de naranja','Manzana']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana', 'beverage' => false]),
    new Food(['name' => 'Agua', 'beverage' => true]),
]);

// Paso por valor
$joanie->setLunch($lunchBox);

// School
$joanie->eatMeal();

