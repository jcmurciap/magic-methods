<?php

class Person {
    
    public $name;
    
    public $online = false;
    
    public function __construct($name)
    {
        $this->name = $name;
    }
}

// Es mejor verificar si dos objetos son iguales verificando una
// propiedad de la instancia de clase.

$camilo = new Person("Camilo");
$camilo->id = 1;
$camilo->online = true;

$camilo2 = new Person("Camilo");
$camilo2->id = 1;

if ($camilo->id == $camilo2->id) {
    echo "TRUE";
} else {
    echo "FALSE";
}
