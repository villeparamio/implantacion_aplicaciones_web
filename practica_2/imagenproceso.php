<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        img{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<form action="imagenproceso.php">
    <button>Generar imagen aleatoria</button>
</form>
<?php
    $aleatorio=mt_rand(1,2);
    if ($aleatorio==1){
        echo "<img src='img/Servidor-4.jpg'>";
    }else{
        echo "<img src='img/Data-Centers-el-Mañana.jpg'>";
    }
?>
</body>
</html>