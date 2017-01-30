<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salarios</title>
</head>
<body>
<?php
    $nombre=$_GET["nombre"];
    $apellidos=$_GET["apellidos"];
    $salario=$_GET["salario"];
    $edad=$_GET["edad"];
    echo $nombre." ";
    echo $apellidos."<br>";
    echo $edad;
    echo "<p>Salario anterior:</p>";
    echo $salario;
    if($salario>1000&&$salario<2000){
        if ($edad>45){
            $salario+=($salario*0.03);
        }else{
            $salario+=($salario*0.1);
        }
    }elseif($salario<=1000){
        if ($edad<=30){
            $asalario=1100;
        }elseif ($edad>30&&$edad<45){
            $salario+=($salario*0.03);
        }else{
            $salario+=($salario*0.15);
        }
    }
echo "<p>Su salario será de: $salario</p>";
?>
</body>
</html>