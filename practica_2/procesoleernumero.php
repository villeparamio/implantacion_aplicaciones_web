<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $numero=$_GET["numero"];
    if (is_numeric($numero)){
        echo $numero." "."Es un número";
        if ($numero==(int)$numero){
            echo "<br>";
            echo $numero." "."No tiene decimales";
        }else{
            echo "<br>";
            echo $numero." "."Tiene decimales";
        }
    }else{
        echo $numero." "."No es un número";
    }
?>
</body>
</html>