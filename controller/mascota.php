<?php

require_once "C:xampp\htdocs\mascota/bdmascota\model\conexion.php";

class Tipo{
    use Mascota;
}

$tipo = new Tipo();
$tipo->mascota();



?>