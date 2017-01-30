<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cálculo de tabla</title>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form action="calculodetabla.php">
    <label for="columnas">Introduzca el numero de columnas</label>
    <input type="number" id="columnas" name="columnas">
    <label for="filas">Introduzca el numero de filas</label>
    <input type="number" id="filas" name="filas">
    <button>Enviar</button>
        <?php
            if (isset($_GET["columnas"]) and isset($_GET["filas"])) {
                echo "<table>";
                for ($contadorf = 0; $contadorf < $_GET["filas"]; $contadorf++) {
                    echo "<tr>";
                    for ($contadorc = 0; $contadorc < $_GET["columnas"]; $contadorc++) {
                        echo "<td>Celda</td>";
                    };
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "<br><p>No se ha introducido alguno de los parámetros</p>";
            }
        ?>
</form>
</body>
</html>