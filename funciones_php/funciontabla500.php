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
        }
        td{
            border: 5px solid black;
        }
    </style>
</head>
<body>
<?php
    function tabla($fila,$columna){
        echo "<table>";
        for ($i = 1; $i <= $fila; $i++) {
            echo "\t<tr>\n";
            for ($j = 1; $j <= $columna; $j++) {
                echo "\t\t<td>hola</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>";
    }
    for ($d=1;$d<=500;$d++){
        tabla(7,8);
    }
?>
</body>
</html>