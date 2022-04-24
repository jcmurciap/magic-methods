<?php

namespace Magic\Magic;
use Magic\Magic\User;

require '../vendor/autoload.php';

$user = new User();
$user->fill([
    "first_name" => "Camilo",
    "last_name" => "Murcia",
]);
$user->nickname = "dev";
unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}
