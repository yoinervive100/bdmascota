<?php
require_once __DIR__ ."/../model/conexion.php";
class Raza{
    use Mascota;
}

$con = new Raza();
$con->raza();
?>