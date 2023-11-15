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
<body>
    <style>
      *{
        margin: 0;
        padding: 0;
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
      table{
        position: absolute;
        left:0;
        top: 120%;
        background-color:bisque;
        border-collapse: collapse;
        text-align:center;
      }
      thead{
        background-color:green;
        border-bottom: solid 5px yellow;
      }
      th,td{
        padding: 10px;
      }
      tr:nth-child(even){
        background-color:#ddd;
      }
    </style>

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
     <form action="" method="post">
      <img src="img/logo-animal.png" alt="">
      <div class="form_conte" >
        <div class="formulario_registro" >
          <div class="form_form" >
            <label for="">ingrese el id</label>
            <input type="text" placeholder="ingrese el id" name="idra" >
          </div>
          <div class="form_form" >
            <label for="">Ingrese el nombre</label>
            <input type="text" placeholder="ingrese la edad" name="nomra" >
          </div>

        </div>
      </div>
      <?php
        include_once "controller/connect.php";
      ?>
          <div class="buto_boton" >
            <button type="submit">agregar</button>
          </div>
    </form>
</body>
</html>