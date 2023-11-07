<?php
session_start();
$sessi = $_SESSION["usuario"];
if($sessi == null){
  echo "usted no tiene autorizacion";
  die();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,300&display=swap');
     </style>
    <title>Document</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    body{
        background-image: url(img/img-animal.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
      }
      header{
        display: flex;
        flex-direction: column;
        background-color: cornsilk;
      }
      .panel_admini{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1vh 3vh;
      }
      .cerrar_sesion{
        background-color:green;
        text-decoration: none;
        color: white;
        padding: 1vh 2vh;
        border-radius: 1vh;
        font-size: 2.5vh;
      }
      form{
        background-color: aqua;
        width: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: auto;
        margin-top: 5vh;
        border-radius: 7px;
        padding: 2vh;
      }
      .form_form{
        display: flex;
        flex-direction: column;
        padding: 1vh;
      }
      input{
        width: 30vh;
        height: 4vh;
        border-radius: 1vh;
        outline: none;
        font-size: 2vh;
      }
      img{
        height: 17vh;
      }
      .buto_boton{
        display: flex;
        justify-content: center;
        padding: 1vh;
      }
      button{
        color: white;
        background-color: green;
        padding: 1vh 3vh;
        border: none;
        cursor: pointer;
        border-radius: 1vh;
        font-size: 2vh;
      }
      .nav_nave{
        background-color: aliceblue;
        padding: 1vh;
        display: flex;
        justify-content: center;
      }
      .nav_enlaces{
        display: flex;
        gap: 3vh;
        font-size: 2.5vh;
      }
      .nav_enlaces a{
        color: black;
      }
      .nav_enlaces a:hover{
        color: green;
      }
      a{
        text-decoration: none;
      }
      label{
        font-size: 2.5vh;
      }
      .titulo_user{
        font-size: 2.5vh;
      }

</style>
<body>
    <header>
        <div class="panel_admini" >
         <div class="titulo_user" >
           <h1>Panel De Administracion:</h1>
           <h2>Bienvenido: <?php echo $_SESSION["usuario"] ?> </h2>
         </div>
          <nav>
           <a href="cerrar.php" class="cerrar_sesion" >cerrar sesion</a>
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
        <img src="img/logo-animal.png" alt="">
        <div class="form_conte" >
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
              <input type="datetime-local" name="fecha" >
            </div>
            <div class="form_form" >
              <label for="">Ingrese la foto</label>
              <input type="file"  name="imagen" >
            </div>
            <div class="form_form" >
              <label for="">Ingrese el User_id</label>
              <input type="text" placeholder="ingrese el id" name="iduser" >
            </div>
            <div class="form_form" >
                <label for="">Ingrese el TipoMascota_id</label>
                <input type="text" placeholder="ingrese el id" name="idmascota" >
              </div>
              <div class="form_form" >
                <label for="">Ingrese el Raza_id</label>
                <input type="text" placeholder="ingrese el id" name="idraza" >
              </div>
            <div class="buto_boton" >
              <button type="submit">agregar</button>
            </div>
   
          </div>
        </div>
        <?php
           include_once "controller/connect.php";
        ?>
      </form>
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
        <?php 

           foreach($result as $resu){ ?>
              <tr>
                <td><?php echo $resu["id"]; ?></td>
                <td><?php echo $resu["nombre"] ?></td>
                <td><?php echo $resu["fecha"]?></td>
                <td>image</td>
                <td><?php echo $resu["user"] ?></td>
                <td><?php echo $resu["mascota"]?></td>
                <td><?php echo $resu["raza"] ?></td>
              </tr>
        <?php } ?>
        </tbody>
      </table>
</body>
</html>