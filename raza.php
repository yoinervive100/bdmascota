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
      form{
        width: 30vh;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2vh 8vh;
        border-radius: 1vh;
        gap: 1vh;
        margin-top: 14vh;
        margin-left: 14vh;
      }
      img{
        height: 17vh;
      }

      label{
        font-size: 2.5vh;
      }
      input{
        width: 23vh;
        height: 3vh;
        outline: none;
        font-size: 2.3vh;
      }
      .buton_boton{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 2vh;
      }
      button{
        padding: 1vh 2vh;
        border: none;
        border-radius: 1vh;
        font-size: 2vh;
        cursor: pointer;
        color: white;
        background-color: green;
      }
      .titulo_user{
        font-size: 2.5vh;
        display: flex;
        align-items: center;
        gap:2vh; 
      }
      .titulo_user img{
        height: 12vh;
      }
      .form_conte{
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(57,163,214,1) 0%, rgba(0,44,255,1) 100%);
        padding: 2vh 5vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 7px;
        gap:2vh;
      }
      .form_conte input{
         margin: 1vh 0;
      }
      table{
        position: absolute;
        left:60vh;
        top: 38vh;
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
        padding: 10px 17px;
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
      .color_delete{
        background-color:red;
      }
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
     <form action="" method="post">
      <div class="form_conte" >
      <img src="img/logo-animal.png" alt="">
          <div class="form_form" >
            <label for="">ingrese el id</label>
            <input type="text" placeholder="ingrese el id" name="idra" >
          </div>
          <div class="form_form" >
            <label for="">Ingrese el nombre</label>
            <input type="text" placeholder="ingrese la edad" name="nomra" >
          </div>
          <?php
             include_once "controller/raza.php";
          ?>
          <div class="buto_boton" >
            <button type="submit">agregar</button>
          </div>
      </div>
    </form>
</body>
</html>