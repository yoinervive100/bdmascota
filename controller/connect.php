<?php

require_once "C:xampp\htdocs\mascota\model\conexion.php";


class Dog{
    use Mascota;
}

$con = new Dog();
$con->tipo_mascota();
$con->login();
$con->user();
$con->role();
$con->vacuna();
?>