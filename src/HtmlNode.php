<?php

namespace Magic\Magic;

class HtmlNode
{
    protected $tag;
    protected $attributes = [];
    protected $content;

    public function __construct($tag, $content=null, $attributes=[])
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
    }

    public function __call($method, array $args = [])
    {
        $this->attributes[$method] = $args[0];
        
        return $this; 
    }
    
    
    public function render()
    {
        $result = "<{$this->tag} {$this->renderAttributes()}>";
        
        if ($this->content != null) {
            $result .= $this->content;

            $result .= "</{$this->tag}>";
        }

        return $result; 
    }

    // Convierte de un arreglo a una cadena
    protected function renderAttributes()
    {
        $result = "";

        foreach ($this->attributes as $name => $value)
        {
            $result .= sprintf(' %s="%s"', $name, $value);
            
            // Do the same like above
            //$result .= ' '.$name.'="'.$value.'"'; 
        }

        return $result;
    }
}
