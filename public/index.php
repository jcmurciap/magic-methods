<?php

namespace Magic\Magic;
require '../vendor/autoload.php';


$user = new User(['name' => 'Claudia']);

$result = serialize($user);

file_put_contents('../storage/user.txt', $result);
