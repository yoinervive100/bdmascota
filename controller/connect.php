<?php

require_once __DIR__ ."/../model/conexion.php";

class Dog{
    use Mascota;
}

$con = new Dog();
$con->login();
$con->user();


//$con->editar();



?>