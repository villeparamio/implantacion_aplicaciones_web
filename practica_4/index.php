<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <title>FIFA, Balón de oro</title>
</head>
<body>
    <?php
        if (isset($_GET["messi"]) && isset($_GET["cristiano"]) && isset($_GET["griezmann"])) {
            $messi=$_GET["messi"];
            $cristiano=$_GET["cristiano"];
            $griezmann=$_GET["griezmann"];
        }if (isset($_GET["error"])){
        $error=$_GET["error"];
        if ($error&8) {
            echo("<h2 class='errores'>El resultado de los porcentajes es superior al 100%</h2>");
            if ($error & 1) {
                echo("<h2 class='errores'>El rango de Messi no va de 0 a 100</h2>");
            }
            if ($error & 2) {
                echo("<h2 class='errores'>El rango de Cristiano no va de 0 a 100</h2>");
            }
            if ($error & 4) {
                echo("<h2 class='errores'>El rango de Griezmann no va de 0 a 100</h2>");
            }
        }
        if ($error&16){
            echo("<h2 class='errores'>El resultado de los porcentajes es inferior al 100%</h2>");
            if ($error&1){
                echo("<h2 class='errores'>El rango de Messi no va de 0 a 100</h2>");
            }
            if ($error&2){
                echo("<h2 class='errores'>El rango de Cristiano no va de 0 a 100</h2>");
            }
            if ($error&4){
                echo("<h2 class='errores'>El rango de Griezmann no va de 0 a 100</h2>");
            }}
        }
    ?>
    <div class="formulario">
        <h1>Resultados encuesta de fútbol</h1>
        <form action="resultado.php" method="get">
            <label for="messi" id="messi">Messi</label>
            <input type="number" id="messi" name="messi" value="<?= $_GET["messi"]?>" <?php
            if (isset($error)){
                if ($error&1){
                    echo "style=\"background-color:red\"";
                }
            }
            ?>>%<br>
            <label for="cristiano" id="cristiano">Cristiano Ronaldo</label>
            <input type="number" id="cristiano" name="cristiano" value="<?= $_GET["cristiano"]?>"<?php
            if (isset($error)){
                if ($error&2){
                    echo "style=\"background-color:red\"";
                }
            }
            ?>>%<br>
            <label for="griezmann" id="griezmann">Griezmann</label>
            <input type="number" id="griezmann" name="griezmann" value="<?= $_GET["griezmann"]?>"<?php
            if (isset($error)){
                if ($error&4){
                    echo "style=\"background-color:red\"";
                }
            }
            ?>>%<br>
            <button>Enviar</button>
        </form>
    </div>
</body>
</html>