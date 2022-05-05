<?php

class Time {
    protected $time = null;

    public function __construct($time = null)
    {
        
        $this->time = $time ?: time(); // Elvis operator
    }

    public function __toString()
    {
        return date('d/m/Y H:i:s', $this->time);
    }

    public function tomorrow()
    {
        return new Time($this->time + 24*60*60);
    }

    public function yesterday()
    {
        return new Time($this->time - 24*60*60);        
    }
}

$today = new Time();

$today2 = new Time();

if ($today==$today2) { // VERDADERO
    echo "VERDADERO";
}else {
    echo "FALSO";
}
// Un objeto se considera igual a otro si pertenecen a la misma clase
// con las mismas propiedades y metodos, si la comparación se hace entre una clase 
// clase padre e hijo serán objetos distintos.

