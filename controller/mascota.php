<?php

require_once "C:xampp\htdocs\mascota\model\conexion.php";

class Tipo{
    use Mascota;
}

$tipo = new Tipo();
$tipo->mascota();

?>