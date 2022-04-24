<?php

namespace Magic\Magic;
use Magic\Magic\User;

require '../vendor/autoload.php';

$user = new User([
    "full_name" => "Claudia Guarnizo"
]);

$user2 = new User([
    "first_name" => "Patricia",
    "last_name" => "Loaiza",
]);

/**
 * MALA PRÁCTICA
 * crear propiedades dinámicamente si no existe
 * sin embargo PHP lo permite 
 * */ 
//$user->full_name = "Camilo Pimentel";

echo "<p>Bienvenido {$user->full_name}</p>";
echo "<p>Bienvenido {$user2->first_name} {$user2->last_name}</p>";