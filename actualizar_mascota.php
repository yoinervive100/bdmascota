<?php
session_start();
$sesi = $_SESSION["usuario"];
if ($sesi = ""){
    echo "no tinene autorizacion";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

    </style>
<header>
        <div class="panel_admini" >
         <div class="titulo_user" >
          <div class="img_logo" >
            <img src="img/logo-animal.png" alt="">
          </div>
          <div class="panel_user" >
          <h1>Panel De Administracion:</h1>
           <h2>Bienvenido: <?php echo $_SESSION["usuario"] ?> </h2>
          </div>
         </div>
          <nav> 
            <a href="cerrar.php" class="cerrar_sesion" ><img src="img/vector-salir.png" alt=""></a>
          </nav> 
        </div>
        <nav class="nav_nave" >
         <div class="nav_enlaces">
           <a href="vacuna.php">vacuna</a>
           <a href="role.php">role</a>
           <a href="tipo.php">tipo</a>
           <a href="user.php">user</a>
         </div>
        </nav>
     </header>
     <form action="" method="post" enctype="multipart/form-data" >
        <div class="form_conte" >
        <img src="img/logo-animal.png" alt="">
          <div class="formulario_registro" >
            <div class="form_form" >
              <label for="">Ingrese el id</label>
              <input type="text" placeholder="ingrese el id" name="idmas" >
            </div>
            <div class="form_form" >
              <label for="">ingrese el nombre</label>
              <input type="text" placeholder="ingrese el nombre" name="mascota" >
            </div>
            <div class="form_form" >
              <label for="">Ingrese la FechaNacimiento</label>
              <input type="date" name="fecha" >
            </div>
            <div class="form_form" >
                <label for="">Ingrese el usuario</label>
                <input type="text" placeholder="ingrese el id" name="iduser">
              </div>
             <?php
                include_once "controller/mascota.php";
             ?>
            <div class="buto_boton">
              <button type="submit">agregar</button>
            </div>
   
          </div>
        </div>
      </form>
</body>
</html>