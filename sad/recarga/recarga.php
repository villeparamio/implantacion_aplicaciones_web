<?php
    session_start();
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            if (!isset($_SESSION['count'])) {
                $_SESSION['count'] = 0;
            } else {
                $_SESSION['count']++;
                if ($_SESSION['count']==30){
                    session_destroy();
                }
            }
            $recarga=$_SESSION["count"];
            echo "Número de recargas $recarga";
        ?>
    </body>
</html>