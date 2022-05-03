<?php

namespace Magic\Magic;

class User extends Model
{
    protected $lunch;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // NO se pasa parametro a la clase para que retorne un objeto nulo
        $this->lunch = new LunchBox();
    }
    
    public function setLunch(LunchBox $lunch)
    {
        $this->lunch = $lunch;
    }
 
    public function eat()
    {
        /**
         * Buena practica.
         * La exepcion quede indentada y no el cuerpo del metodo
        */
        if($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} no tiene nada para comer");
        }

        
        // No deberia usarse 'echo' dentro de la clase.
        echo "<p>{$this->name} almuerza {$this->lunch->shift()}</p>";
    }

    public function eatMeal()
    {
        foreach ($this->lunch as $food) {
            echo "<p>{$this->name} eats {$food}</p>";            
        }
    }
}
