<?php

namespace Magic\Magic;
use Magic\Magic\User;

require '../vendor/autoload.php';

$user = new User([
    'first_name' => 'Juan',
    'last_name' => 'Murcia',
]);

echo "<p>Bienvenido {$user->full_name}</p>";