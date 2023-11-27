<?php
require_once "C:xampp\htdocs\mascota/bdmascota\model\conexion.php";
class Tipo{
    use Mascota;
}

$con = new Tipo();
$con->tipo_mascota();
?>