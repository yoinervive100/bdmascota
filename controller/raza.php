<?php
require_once "C:xampp\htdocs\mascota\model\conexion.php";
class Raza{
    use Mascota;
}

$con = new Raza();
$con->raza();
?>