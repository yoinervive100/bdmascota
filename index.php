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
            height: 100%; 
        }
        h1{
           text-align: center;
        }
        form{
            background-color: rgba(255, 255, 255, 0.586);
            width: 65vh;
            padding: 2vh 2vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 3vh;
            border-radius: 2vh;
            margin: auto;
            margin-top: 14vh;
  
        }
        .input_wars{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding-top: -3vh;
            padding-left: 2vh;
        }
        .input_wars img{
            height: 3vh;
            width: 3vh;
        }
      input{
        outline: none;
        width: 30vh;
        height: 5.5vh;
        font-size: 2.5vh;
        border-radius: 1vh;
      }
      .editar_nom{
        display: flex;
        justify-content: flex-start;
        align-items: center;
        gap: 1vh;
        padding: 1vh;
      }
      .enviar{
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 1vh;
      }
      .enviar button{
        padding: 1.5vh 5vh;
        cursor: pointer;
        background-color: black;
        color: white;
        border: none;
        font-size: 2.8vh;
        border-radius: 1vh;
      }
      .color{
        color: red;
      } 
      h1{
        font-size: 4.5vh;
      }
      label{
        font-size: 2.5vh;
      }
      h4{
        font-size: 3vh;
      }
      .login_fondo{
        background-image: url(img/fondo-login.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        width:65vh;
        margin-top: -7vh;
        border-top-left-radius: 2vh;
        border-top-right-radius: 2vh;
        font-size:2vh;
        color: white;
      }
      .login_fondo h2{
        padding: 0 1vh;
      }
      .login_log{
        display: flex;
        justify-content: center;
        padding: 0 30vh;
      }
      .img_veterinario img{
        height: 30vh;
      }

    </style>
   
   <form action="" method="post">
    <div class="login_fondo">
      <div class="login_log" >
        <div class="img_veterinario" >
          <img src="img/vector-nuevo.png" alt="">
        </div>
      </div>
      <h2>Quien ama a los animales  ama al ser humano.</h2>
    </div>
    <h1>Iniciar sesion</h1>

    <div class="input_wars" >
        <div class="editar_nom" >
            <img src="img/user-solid-36.png" alt="">
            <label for="">Usuario</label>
        </div>
        <input type="text" placeholder="nombre" name="nom" >
    </div>
    <div class="input_wars" >
        <div class="editar_nom" >
            <img src="img/key-solid-36.png" alt="">
            <label for="">Contraseña</label>
        </div>
        <input type="password" placeholder="contraseña" name="clave" >
    </div>
    <div class="enviar" >
       <button type="submit">iniciar</button>
    </div>
    <?php
     include_once "controller/connect.php";
    ?> 
   </form>
</body>
</html>