<?php

namespace Magic\Magic;

class User
{
    public function __construct(array $attributes = [])
    {
        foreach ($attributes as $key => $value) {
            $this->$key = $value; // (1era vuelta) $this->first_name = $value
        }
    }
}
