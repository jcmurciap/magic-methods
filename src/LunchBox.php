<?php

namespace Magic\Magic;

class LunchBox implements \Iterator
{
    protected $food = [];
    protected $original = true;

    public function __construct(array $food = [])
    {
        $this->food = $food;
    }

    public function __clone()
    {
        $this->original = false;
    }

    public function shift()
    {
        return array_shift($this->food);
    }

    public function isEmpty()
    {
        return empty($this->food);
    }

    public function all() 
    {
        return $this->food;
    }

    public function current()
    {
        $var = current($this->food);
        echo "<p>actual: $var</p>";
        return $var;
    }

    public function rewind():void
    {
        echo "<p>rebobinando</p>";
        reset($this->food);
    }

    public function key()
    {
        $var = key($this->food);
        echo "<p>clave: $var</p>";
        return $var;
    }

    public function next():void
    {
        $var = next($this->food);
        echo "<p>siguiente: $var</p>";
        
    }

    public function valid():bool
    {
        $clave = key($this->food);
        $var = ($clave !== NULL && $clave !== FALSE);
        echo "<p>válido: $var</p>";
        return $var;
    }
}
