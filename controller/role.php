<?php

require_once "C:xampp\htdocs\mascota/bdmascota\model\conexion.php";

class Role{
    use Mascota;
}

$tipo = new Role();
$tipo->role();