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
        background-image: url(img/vector-fondo.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
      }
      header{
        display: flex;
        flex-direction: column;
        background-color: cornsilk;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(115,15,222,1) 0%, rgba(0,212,255,1) 100%);
        color: white;
      }
      .panel_admini{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1vh 3vh;
      }
      .cerrar_sesion img{
        height: 12vh;
      }
      form{
        width: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin: auto;
        margin-top: 5vh;
        margin-left: 5vh;
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
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(115,15,222,1) 0%, rgba(0,44,255,1) 100%);
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
        color: white;
      }
      a{
        text-decoration: none;
      }
      label{
        font-size: 2.5vh;
      }
      .titulo_user{
        font-size: 2.5vh;
        display: flex;
        align-items: center;
        gap: 2vh;
      }
      .titulo_user img{
        height: 12vh;
      }
      table{
        position: absolute;
        top: 40vh;
        left: 65vh;
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(112,57,214,1) 0%, rgba(92,55,221,1) 58%, rgba(0,44,255,1) 100%);
        border-collapse: collapse;
        text-align:center;
        color:#131eda;
      }
      thead{
        background-color:green;
        border-bottom: solid 5px yellow;
      }
      th,td{
        padding: 10px 20px ;
      }
      td{
        color:white;
      }
      tr:nth-child(even){
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(112,57,214,1) 0%, rgba(0,44,255,1) 100%);

      }
      td img{
        height: 2.5vh;
      }
      .form_conte{
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(57,163,214,1) 0%, rgba(0,44,255,1) 100%);
        padding: 2vh 5vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 7px;
      }
      .form_fecha{
         position: absolute;
         top: 20vh;
         left: 75vh;
      }
      .mover{
        display: grid;
        gap:2vh;
        grid-template-columns: 2fr 2fr;   
      }
      .color_delete{
        background-color:red;
      }
      .form_conte input{
         margin: 1vh 0;
      }
      .form_mover,.filtro{
        display: flex;
        flex-direction: column;
      }

</style>
<body>

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

      <form action="" method="POST" class="form_fecha" >
        <div class="mover">
        <div class="form_mover" >
              <input type="date" name="fecha" >
              <input type="date" name="fecha1" >
        </div>
        <div class="filtro">
              <input type="text" name="filt" placeholder="hola"  >
              <input type="text" name="filt1" >
        </div>
        </div>
        <button type="submit" name="consultor" >consultar</button>
      </form>

</body>
</html>