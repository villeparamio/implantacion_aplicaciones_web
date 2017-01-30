<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiplos</title>
</head>
<body>
<?php
    $multiplo=false;
    $numero=$_GET["numero"];
    if($numero%2==0){
        echo $numero."es múltiplo de 2";
        $multiplo=true;
    }
    if($numero%3==0){
        echo $numero."es múltiplo de 3";
        $multiplo=true;
    }
    if ($multiplo==false){
        echo $numero."No es miltiplo de 2 ni de 3";
    }
?>
</body>
</html>