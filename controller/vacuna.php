<?php
require_once __DIR__ ."/../model/conexion.php";
class vacuna{
    use Mascota;
}

$con = new vacuna();
$con->vacuna();
?>