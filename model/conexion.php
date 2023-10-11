<?php


trait  Mascota{
  private $servidor = "localhost";
  private $usuario = "root";
  private $password = "1234";
  private $bd = "mascota";

  public function conexion(){
    try {
       $conexion = new PDO("mysql:host=$this->servidor;dbname=$this->bd",$this->usuario,$this->password);
       $conexion-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       echo "conexion exitosa";
    } catch (PDOexception $error) {
         echo "fallo la conexion".$error->getMessage();
    }
  }
}




?>