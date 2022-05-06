<?php

/**
 * TRAITS
 * Permite usar metodos y propiedades en mas de una clase
*/

trait CanShootArrows
{
    public function shootArrow()
    {
        echo "<p>Disparó una flecha</p>";
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
    use CanRide, CanShootArrows, CanPerformBasicAction {
        CanPerformBasicAction::move insteadOf CanRide;
        CanRide::move as ride;
        CanPerformBasicAction::move as BasicMove;
    }

    // public function move()
    // {
    //     echo "<p>Riding</p>";
    // }
}

$mountedArcher = new MountedArcher();
$mountedArcher->BasicMove(); // Caminó
$mountedArcher->ride(); // Cabalgó

