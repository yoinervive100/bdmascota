<?php

require_once __DIR__ ."/../model/conexion.php";
class Role{
    use Mascota;
}

$tipo = new Role();
$tipo->role();