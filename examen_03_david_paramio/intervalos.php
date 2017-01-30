<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intervalos</title>
    <style>
        input, button{
            width: 50%;
            height: 60px;
            margin: 20px;
            margin-left: 25%;
            margin-right: 25%;
            font-size: 2.5em;
        }
        p{
            color:<?php
                if (isset($_POST["color"])) {
                    $color = $_POST["color"];
                    echo "$color";
                }
            ?>;
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
<form action="intervalos.php" method="post">
    <label for="numerouno" id="numerouno"></label>
    <input type="text" id="numerouno" name="numerouno" placeholder="Escriba el primer número"><br>
    <label for="numerodos" id="numerodos"></label>
    <input type="text" id="numerodos" name="numerodos" placeholder="Escriba el segundo número"><br>
    <label for="intervalo" id="intervalo"></label>
    <input type="text" id="intervalo" name="intervalo" placeholder="Intervalo"><br>
    <label for="color"></label>
    <input type="color" id="color" name="color">
    <button>Realizar</button>
    <br>
    <?php
    if (isset($_POST["numerouno"]) and isset($_POST["numerodos"]) and isset($_POST["intervalo"])) {
        $uno=$_POST["numerouno"];
        $dos=$_POST["numerodos"];
        $intervalo=$_POST["intervalo"];
        if ($uno>=1 and $uno<=100000){
            if($dos>=1 and $dos<=100000){
                if ($intervalo>=1 and $intervalo<=100){
                    if ($uno<$dos){
                        echo "<p>$uno</p><br>";
                        for ($cont=$uno;$cont<$dos;){
                            $cont+=$intervalo;
                            echo "<p>$cont</p><br>";
                        }
                    }else{
                        echo "<p>$dos</p><br>";
                        for ($cont=$dos;$cont<$uno;){
                            $cont+=$intervalo;
                            echo "<p>$cont</p><br>";
                        }
                    }
                }
            }
        }
    }
    ?>
</form>
</body>
</html>