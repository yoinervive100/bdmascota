<?php

require_once "C:xampp\htdocs\mascota\model\conexion.php";

class Dog{
    use Mascota;
}

$con = new Dog();
$con->conexion();

?>