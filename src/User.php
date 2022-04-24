<?php

namespace Magic\Magic;

class User extends Model
{
    public function getFullNameAttribute($value)
    {
        return $this->first_name .' '.$this->last_name;
    }
}
