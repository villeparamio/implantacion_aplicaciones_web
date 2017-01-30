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
<div class="formulario">
    <h1>Resultados encuesta de fútbol</h1>

    <?php
    $messi=$_GET["messi"];
    $cristiano=$_GET["cristiano"];
    $griezmann=$_GET["griezmann"];
    $error=0;
    if ($messi+$cristiano+$griezmann==100){
        echo "<p style='color: red'>Messi ";
        for ($i=0;$i<=$messi;$i++){
            echo "*";
        }
        echo "</p><br>";
        echo "<p style='color: white'>Cristiano Ronaldo ";
        for ($i=0;$i<=$cristiano;$i++){
            echo "*";
        }
        echo "</p><br>";
        echo "<p style='color: blue'>Griezmann ";
        for ($i=0;$i<=$griezmann;$i++){
            echo "*";
        }
        echo "</p><br>";
    }elseif($messi+$cristiano+$griezmann>100){
        if ($messi<0 or $messi>100){
            $error=$error+1;
        }
        if ($cristiano<0 or $cristiano>100){
            $error=$error+2;
        }
        if ($griezmann<0 or $griezmann>100){
            $error=$error+4;
        }
        $error=$error+8;
        header("location: index.php?error=$error&messi=$messi&cristiano=$cristiano&griezmann=$griezmann");
    }elseif($messi+$cristiano+$griezmann<100){
        if ($messi<0 or $messi>100){
            $error=$error+1;
        }
        if ($cristiano<0 or $cristiano>100){
            $error=$error+2;
        }
        if ($griezmann<0 or $griezmann>100){
            $error=$error+4;
        }
        $error=$error+16;
        header("location: index.php?error=$error&messi=$messi&cristiano=$cristiano&griezmann=$griezmann");
    }
    ?>
    <a href="index.php?<?="error=$error&messi=$messi&cristiano=$cristiano&griezmann=$griezmann"?>">Volver</a>
</div>
</body>
</html>