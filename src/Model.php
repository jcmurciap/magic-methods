<?php

namespace Magic\Magic;

abstract class Model
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
        $value = $this->getAttributeValue($name);
        
        if ($this->hasGetMutator($name)) {
            return $this->mutateAttribute($name, $value);
        } 
        
        return $value;
    }

    protected function mutateAttribute($name, $value)
    {
        return $this->{'get'.Str::studly($name).'Attribute'}($value);
    }

    protected function hasGetMutator($name)
    {
        return method_exists($this, 'get'.Str::studly($name).'Attribute');
    }

    public function getAttributeValue($name)
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
