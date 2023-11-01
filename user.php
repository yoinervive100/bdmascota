<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <label for="">ingrese su nombre</label><br>
        <input type="text" name="nombr" placeholder="introduzca se nombre"><br>
        <label for="">ingrese su usuario</label><br>
        <input type="text" name="usuario" placeholder="introduzca su usuario"><br>
        <label for="">ingrese su email</label><br>
        <input type="email" name="email"  placeholder="introduzca su correo" ><br>
        <label for="">ingrese su contraseña</label><br>
        <input type="password" name="password" placeholder="introduzca se contraseña"><br>
        <label for="">ingrese su role</label><br>
        <input type="text"  name="role" placeholder="introduzca se role"><br>
        <button type="submit">registrar</button>
        <?php
          include_once "controller/connect.php";
        ?>
    </form>
</body>
</html>