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
        $this->content = $content;
        $this->attributes = $attributes;
    }

    public function __call($method, array $args = [])
    {
        $this->attributes[$method] = $args[0];
        
        return $this; 
    }
    
    public static function __callStatic($method, array $arguments = [])
    {
        $content = isset($arguments[0]) ? $arguments[0] : null;
        $attributes = isset($arguments[1]) ? $arguments[1] : [];
        
        return new HtmlNode($method, $content, $attributes);
    }

    // Convierte un objeto en una cadena
    public function __toString() // NO DEBE lanzar exepciones
    {
        return $this->render();
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
