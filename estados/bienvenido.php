<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_SESSION["correcto"])){
        if ($_SESSION["correcto"]==1){
            echo "<h1>¡Bienvenido!</h1>";
        }else{
            header('location:login.php');
        }
    }else{
        header('location:login.php');
    }

?>
<a href="cerrar.php">Cerrar sesión</a>

</body>
</html>