<?php

namespace Magic\Magic;

class User extends Model
{
    public function __toString()
    {
        return $this->name;
    }

    // se llama cada vez que un objeto de serialice
    public function __sleep()
    {
        // attributes quiero serializar y dbPassword,no
        return ['attributes', 'dbPassword'];
    }

    public function __wakeup()
    {
        $this->attributes['name'] = strtoupper($this->attributes['name']);
    }
    
    // public function getFirstNameAttribute($value)
    // {
    //     return strtoupper($value);
    // }
}
