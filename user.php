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
        width: 40vh;
        margin: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2vh 8vh;
        border-radius: 1vh;
        gap: 1vh;
        margin-top: 10vh;
      }
      img{
        height: 17vh;
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
        font-size: 2.3vh;
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
      }
      .form_cont{
        display: flex;
        flex-direction: column;
        gap: 1vh;
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
      <div class="form_formulario" >
        <div class="form_cont" >
          <label for="">ingrese su nombre</label>
          <input type="text" name="nombr" placeholder="introduzca se nombre">
        </div>
        <div class="form_cont" >
          <label for="">ingrese su usuario</label>
          <input type="text" name="usuario" placeholder="introduzca su usuario">
        </div>
        <div class="form_cont" >
          <label for="">ingrese su email</label>
          <input type="email" name="email"  placeholder="introduzca su correo" >
        </div>
        <div class="form_cont" >
          <label for="">ingrese su contraseña</label>
          <input type="password" name="password" placeholder="introduzca se contraseña">
        </div>
        <div class="form_cont" >
          <label for="">ingrese su role</label>
          <input type="text"  name="role" placeholder="introduzca se role">
        </div>
        <div class="buton_boton" >
          <button type="submit">registrar</button>
        </div>
      </div>
        <?php
          include_once "controller/connect.php";
        ?>
    </form>
</body>
</html>