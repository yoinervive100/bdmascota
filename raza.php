<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php require_once "C:xampp\htdocs\mascota\controller\connect.php";?>
   

    <form action="" method="post">
        <label for="">ingrese el tipo raza</label><br>
        <input type="text" placeholder="ingrese el nombre" name="nombre" ><br>
        <button type="submit">agregar</button>
    </form>

    <table>
        <thead>
            <?php include_once "C:xampp\htdocs\mascota\model\conexion.php";?>

 
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>ACCION</th>
            </tr>
        </thead>
        <br>
        <br>

    </table>
</body>
</html>