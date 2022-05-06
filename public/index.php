<?php

/**
 * TRAITS
 * Permite usar metodos y propiedades en mas de una clase
*/

trait CanShootArrows
{
    //public $arrows = 50; // No es posible sobre-escribir PROPIEDADES
    
    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
    }

    public function getArrows() // Se puede dejar abstracto e implementar en MountedArcher
    {
        return $this->arrows ?? 100;
    }
}

trait CanRide
{
    public function move()
    {
        echo "<p>Cabalgó</p>";
    }
}


trait CanPerformBasicAction
{
    public function move()
    {
        echo "<p>Caminó</p>";
    }
}
class Knight
{
    use CanRide;
}

class Archer 
{
    use CanShootArrows;
}

// Unit -> CanRide -> MountedArcher
class MountedArcher
{
    use CanRide, CanShootArrows;
    
    public $arrows = 10; // No se puede sobre-escribir propiedades
}

$mountedArcher = new MountedArcher();
$mountedArcher->move(); // Cabalgó
echo "{$mountedArcher->getArrows()}";
