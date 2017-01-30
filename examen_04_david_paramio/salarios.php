<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td{
           border: 1px solid black;
            text-align: left;
            height: 50px;
        }
        div{
            height: 20px;
        }
        div:nth-of-type(odd){
            background-color: green;
        }
        div:nth-of-type(even){
            background-color: #0000bf;
        }
    </style>
</head>
<body>
<?php
    include "datos.php";
    echo "<table>";
    echo "<tr><td>Pais</td><td colspan='3'>Salario</td></tr>";
    foreach($datos as $pais=>$salarios){
        foreach ($salarios as $salario=>$valor){
            echo "<tr><td>$pais</td><td>$salario</td><td>$valor&euro;</td><td><div style='width: ;'></div></td></tr>";

        }
    }
    echo "</table>";
?>
</body>
</html>