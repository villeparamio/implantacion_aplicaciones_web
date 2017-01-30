<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Numeros Pares</title>
</head>
<body>
<form action="numerospares.php">
    <input type="text" name="numero" placeholder="Inserta un número">
    <button>Enviar</button>
</form>
<?php
    function numerospares($numero){
        $incremento=0;
        for ($cont=2;$cont<=$numero;$cont+=2){
            $incremento++;
        }
        return $incremento;
    }
    function pares($numero){
        return (int)(($numero-1)/2);
    }
    if (isset($_GET["numero"])){
        echo numerospares($_GET["numero"]);
    }
?>
</body>
</html>