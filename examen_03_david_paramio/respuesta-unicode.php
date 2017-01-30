<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unicode</title>
    <style>
        .error{
            color: red;
        }
        div{
            text-align: center;
        }
        table{
            border-collapse: collapse;
            width: 98%;
            height: 600px;
            border: 2px solid black;
            text-align: center;
        }
        td{
            border: 2px solid black;
        }
        .fila11{
            font-size: 20em;
        }
        .fila12{
            font-size: 35em;
        }
        .fila2{
            height: 50px;
        }
    </style>
</head>
<body>
<?php
    if (isset($_GET["numero"])){
        $numero=$_GET["numero"];
        $decimal=hexdec($numero);
        if ($decimal>=1536 and $decimal<=1791){
            echo "<p>Código $numero</p><br>";
            echo "<table><tr>
                          <td class='fila11'>&#".($decimal-1).";</td>
                          <td class='fila12'>&#".($decimal).";</td>
                          <td class='fila11'>&#".($decimal+1).";</td>
                        </tr>
                         <tr>
                          <td class='fila2'>Anterior</td>
                          <td class='fila2'>Actual</td>
                          <td class='fila2'>Siguiente</td>
                        </tr></table><br>";

        }else{
            echo "<h1 class='error'>No se ha recibido un carácter árabe</h1>";
        }
    }else{
        echo "<h1 class='error'>No se ha recibido nada</h1>";
    }
?>
<div>
<a href="codigo-unicode.php">Probar otro código</a>
</div>
</body>
</html>