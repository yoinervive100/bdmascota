<?php
require_once "C:xampp\htdocs\mascota/bdmascota\model\conexion.php";

class Actualizar
{
    use Mascota;
}

$conect = new Actualizar();
$conect->actualizar();
?>