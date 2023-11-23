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
      .panel_admini{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1vh 3vh;
      }
      .cerrar_sesion img{
        height: 12vh;
      }
      .form_conte{
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(57,163,214,1) 0%, rgba(0,44,255,1) 100%);
        padding: 2vh 5vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 7px;
        }
      img{
        height: 17vh;
      }
      .buto_boton{
        display: flex;
        justify-content: center;
        padding: 1vh;
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
      .lista_listar{
        display: flex;
        flex-direction: column;
        
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
        <div class="form_conte">
        <img src="img/logo-animal.png" alt="">
        <div class="lista_listar">
                <label for=""> ingrese el nombre</label>
                <input type="text" placeholder="nuevo nombre" name="no" >
            </div>
            <div class="lista_listar">
                <label for=""> ingrese  la fecha nacimiento</label>
                <input type="date" nanme="fec">
            </div>
            <?php require_once "controller/actualizar.php"; ?>
            <div class="boton" >
                <button type="submit">actualizar</button>
            </div>
        </div>
        </form>
</body>
</html>