<?php
    session_start();
    if (isset($_SESSION["correcto"])){
        if ($_SESSION["correcto"]==1){
            header('location:bienvenido.php');
        }
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form action="loguearse.php" method="post">
    <label for="usuario">Nombre de usuario: </label>
    <input type="text" name="usuario" id="usuario"><br>
    <label for="contraseña">Contraseña: </label>
    <input type="password" name="contraseña" id="contraseña">
    <button>Enviar</button>
</form>
</body>
</html>