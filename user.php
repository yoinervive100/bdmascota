

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
             background-image: url(img/vector-fondo.jpg);            background-repeat: no-repeat;
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
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(57,163,214,1) 0%, rgba(0,44,255,1) 100%);
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