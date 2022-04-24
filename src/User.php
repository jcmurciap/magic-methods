<?php

namespace Magic\Magic;

class User
{
    protected $attributes = [];
    
    public function __construct(array $attributes = [])
    {
        $this->fill($attributes);
    }

    public function fill(array $attributes=[])
    {
        return $this->attributes = $attributes;
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    // Buena práctica: Extraer la lógica del metodo magico.
    protected function getAttribute($name) 
    {   
        if (array_key_exists($name, $this->attributes))  {
            return $this->attributes[$name];
        }
    }

    protected function setAttribute($name, $value)
    {
        $this->attributes[$name]=$value;
    }
    
    public function __get($name) // $name es una propiedad no definida q estamos llamando
    {
        return $this->getAttribute($name);
    }

    public function __set($name,  $value)
    {
        return $this->setAttribute($name,  $value);
    }

    public function __isset($name)
    {
        return isset($this->attributes[$name]);
    }

    public function __unset($name)
    {
        unset($this->attributes[$name]);
    }

}
