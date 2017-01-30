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
<form action="funciontabla.php">
    <label for="filas">Inserte numero de filas</label>
    <input type="text" name="filas" id="filas"><br>
    <label for="columnas">Inserte número de columnas</label>
    <input type="text" name="columnas" id="columnas"><br>
    <button>Crear tabla</button>
</form>
<?php
    function tabla($fila,$columna){
        echo "<table>";
        for ($i=1;$i<=$fila;$i++){
            echo "\t<tr>\n";
            for ($j=1;$j<=$columna;$j++) {
                echo "\t\t<td>hola</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>";
    }
    if (isset($_GET["filas"]) && isset($_GET["columnas"])){
        tabla($_GET["filas"],$_GET["columnas"]);
    }
?>
</body>
</html>