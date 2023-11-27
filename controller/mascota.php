<?php

require_once __DIR__ ."/../model/conexion.php";
class Tipo{
    use Mascota;
}

$tipo = new Tipo();
$tipo->mascota();



?>