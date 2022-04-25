<?php

namespace Magic\Magic;

class User extends Model
{
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }
}
