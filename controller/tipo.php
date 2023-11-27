<?php
require_once __DIR__ ."/../model/conexion.php";
class Tipo{
    use Mascota;
}

$con = new Tipo();
$con->tipo_mascota();
?>