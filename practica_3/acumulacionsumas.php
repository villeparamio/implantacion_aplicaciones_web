<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acumulación de sumas</title>
</head>
<body>
<?php
    $suma=0;
    $numero=$_GET["numero"];
    echo "<p>Número $numero</p><br>";
    echo "<p>Números pares anteriores a él:</p>";
    for ($cont=2;$cont<$numero;$cont+=2){
        echo " $cont ";
        $suma+=$cont;
    }
    echo "<p>Resultado</p>";
    echo "<br>$suma<br>";
    echo "<a href='acumulaciondesumas.php?n=$numero'>Volver</a>"
?>
</body>
</html>