<?php


trait  Mascota{
  private $servidor = "localhost";
  private $usuario = "root";
  private $password = "1234";
  private $bd = "mydb";
  private $conexion;

  public function __construct(){
    try {
      $this->conexion = new PDO("mysql:host=$this->servidor;dbname=$this->bd",$this->usuario,$this->password);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //  echo "conexion exitosa";
    } catch (PDOexception $error) {
         echo "fallo la conexion".$error->getMessage();
    }
  }
  public function login(){
    if(isset($_POST["nom"]) && isset($_POST["clave"]) ){
     $nom = $_POST["nom"];
     $clave = $_POST["clave"];
     $con = $this->conexion->prepare("SELECT * FROM user WHERE username = :nom AND passwor = :clave");
     $con->bindParam(':nom',$nom);
     $con->bindParam(':clave',$clave);
     $con->execute();
     $usuario = $con->fetch(PDO::FETCH_OBJ);
     if ($usuario){
       session_start();
       $_SESSION["usuario"] = $nom;
       header("location:user.php");
     }else{
      ?>
      <h4 class="color">no existe</h4>
     <?php
     }
    }
  }
  
  public function user(){
    if(isset($_POST["nombr"])  && isset($_POST["usuario"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["role"])){
       $nombre = $_POST["nombr"];
       $usuario = $_POST["usuario"];
       $email = $_POST["email"];
       $password = $_POST["password"];
       $role = $_POST["role"];
       $cont = $this->conexion->prepare("INSERT INTO user(id,nombre,username,email,passwor,Role_id,foto)VALUES(NULL,:nombre,:user,:email,:passwor,:roles,NUll)");
       $cont->bindParam(':nombre',$nombre);
       $cont->bindParam(':user',$usuario);
       $cont->bindParam(':email',$email);
       $cont->bindParam(':passwor',$password);
       $cont->bindParam(':roles',$role);
       $cont->execute();
    }
  }
  public function role(){
    if (isset($_POST["nomm"]) && isset($_POST["idd"])){
       $id = $_POST["nomm"];
       $nom = $_POST["idd"];
       $pre = $this->conexion->prepare("INSERT INTO rol(id,nombre)VALUES(:id,:nombre)");
       $pre->bindParam('id',$id);
       $pre->bindParam('nombre',$nom);
       $pre->execute();
    }
  }
  public function vacuna(){
    if (isset($_POST["t1"]) && isset($_POST["t2"])){
       $t1 = $_POST["t1"];
       $t2 = $_POST["t2"];
       $vacu = $this->conexion->prepare("INSERT INTO vacuna(id,nombre)VALUES(:id,:nombre)");
       $vacu->bindParam('id',$t1);
       $vacu->bindParam('nombre',$t2);
       $vacu->execute();
    }
  }
  public function tipo_mascota(){
    if(isset($_POST["id"]) && isset($_POST["nombre"]) && isset($_POST["edad"]) && isset($_POST["adulto"]) && isset($_POST["adult"])){
      $id = $_POST["id"];
      $nombre = $_POST["nombre"];
      $edad = $_POST["edad"];
      $adulto = $_POST["adulto"];
      $adult = $_POST["adult"];
      $sql = $this->conexion->prepare("INSERT INTO tipomascota(id,nombre,EdadEquivalenteJoven,EdadEquivalenteAdulto,EdadAdulto)VALUES(:id,:nombre,:edad,:adulto,:adult)");
      $sql->bindParam(':nombre',$nombre);
      $sql->bindParam(':id',$id);
      $sql->bindParam(':edad',$edad);
      $sql->bindParam(':adulto',$adulto);
      $sql->bindParam(':adult',$adult);
      $sql->execute();
    }
  }
  public function raza(){
    if(isset($_POST["idra"]) && isset($_POST["nomra"]) && isset($_POST["idmascot"])){
      $id = $_POST["idra"];
      $nombre = $_POST["nomra"];
      $idmas = $_POST["idmascot"];
      $con = $this->conexion->prepare("INSERT INTO raza(id,nombre,TipoMascota_id)VALUES(:id,:nombre,:mascota)");
      $con->bindParam(':id',$id);
      $con->bindParam('nombre',$nombre);
      $con->bindParam('mascota',$idmas);
      $con->execute();
    }

  }
  public function mascota(){
    if(isset($_POST["idmas"]) && isset($_POST["mascota"]) && isset($_POST["fecha"])  && isset($_POST["iduser"]) && isset($_POST["idmascota"]) && isset($_POST["idraza"]) ){
      $id = $_POST["idmas"];
      $nombre = $_POST["mascota"];
      $fecha = $_POST["fecha"];
      $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
      $user = $_POST["iduser"];
      $mascota = $_POST["idmascota"];
      $raza = $_POST["idraza"];
      $con = $this->conexion->prepare("INSERT INTO mascota(id,nombre,FechaNacimiento,foto,User,TipoMascota_id,Raza_id)VALUES(:id,:nombre,:fecha,:imagen,:user,:mascota,:raza)");
      $con->bindParam(':id',$id );
      $con->bindParam(':nombre',$nombre);
      $con->bindParam(':imagen',$imagen);
      $con->bindParam(':fecha',$fecha);
      $con->bindParam('user',$user);
      $con->bindParam(':mascota',$mascota);
      $con->bindParam('raza',$raza);
      $con->execute();
    }
    $sql = $this->conexion->prepare("SELECT * FROM mascota");
    $sql->execute();
    $cont = $sql->setFetchMode(PDO::FETCH_ASSOC);
    $result = $sql->fetchAll();
      ?>
      <table>
      <thead>
          <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>FECHA</th>
            <th>FOTO</th>
            <th>USER_ID</th>
            <th>TIPOMASCOTA</th>
            <th>RAZA_ID</th>
          </tr>
        </thead>
         <tbody>
            <?php foreach($result as $resu){ ?> 
              <tr>
                <td><?php echo $resu['id']; ?></td>
                <td><?php echo $resu['nombre']; ?></td>
                <td><?php echo $resu['FechaNacimiento']; ?></td>
                <td><img src="" ></td>
                <td><?php echo $resu['User']; ?></td>
                <td><?php echo $resu['TipoMascota_id']; ?></td>
                <td><?php echo $resu['Raza_id']; ?></td>
              </tr>
              <?php }?>
         </tbody>
      </table>
     <?php
         

  }

}



?>