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
        <label for="">ingrese el id roles</label><br>
        <input type="text" name="nomm" placeholder="introduzca el id"><br>
        <label for="">ingrese el nombre</label><br>
        <input type="text" name="idd" placeholder="introduzca el nombre"><br>
        <button type="submit">registrar</button>
        <?php 
         include_once "controller/connect.php";
        ?>
    </form>
</body>
</html>