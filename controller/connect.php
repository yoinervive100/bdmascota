<?php

require_once "C:xampp\htdocs\mascota/bdmascota\model\conexion.php";


class Dog{
    use Mascota;
}

$con = new Dog();
$con->login();
$con->user();


//$con->editar();



?>