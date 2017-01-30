<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Asteriscos</title>
</head>
<body>
<?php
    if (isset($_GET["numero"])){
        $numero=$_GET["numero"];
        if (is_numeric($numero)) {
            if ($numero > 0) {
                for ($contador = 0; $contador < $numero; $contador++) {
                    echo "*";
                }
            } else {
                echo "El numero es negativo";
            }
        }else{
            echo "el valor introducido no es un número";
        }
    }else{
        echo "No se ha escrito nada";
    }
?>
</body>
</html>