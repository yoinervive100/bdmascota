<?php
require_once "C:xampp\htdocs\mascota/bdmascota\model\conexion.php";
class vacuna{
    use Mascota;
}

$con = new vacuna();
$con->vacuna();
?>