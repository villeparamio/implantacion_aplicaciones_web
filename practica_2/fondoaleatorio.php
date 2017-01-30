<?php
$red=mt_rand(0,255);
$green=mt_rand(0,255);
$blue=mt_rand(0,255);
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fondoaleatorio</title>
    <style>
        body{
            background-color: <?= "rgb($red,$green,$blue)"?>;
        }
    </style>
</head>
<body>
    <?php
        if ($red>$green&&$red>$blue){
            echo "Rojo";
        }elseif($green>$red&&$green>$blue){
            echo "Verde";
        }elseif($blue>$red&&$blue>$green){
            echo "Azul";
        }
    ?>

</body>
</html>