<?php
require_once(__DIR__ . "./model.php");

class Actualizar
{
    use Mascota;
}

$conect = new Actualizar();
$conect->actualizar();
?>