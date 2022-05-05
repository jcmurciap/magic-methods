<?php

namespace Magic\Magic;

class Food extends Model
{
    public function getBeverageAttribute()
    {
        return $this->attributes['beverage'] ?? false;
        //return $this->attribute['beverage'] 
        //          ? $this->attribute['beverage']
        //          : false;
    }
}