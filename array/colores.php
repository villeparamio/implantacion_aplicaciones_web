<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Franjas</title>
    <style>
        body{
            margin:0;
            height: 100%;
            width: 100%;
        }
        div{
            position: fixed;
            width: 100%;
            height:1%;
            margin: 0;
            font-size: 0.4em;
        }
    </style>
</head>
<body>
    <?php
        for ($i=0;$i<10;$i++){
            $color[$i]=mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255);
        }
        $top=0;
        for ($a=0;$a<10;$a++){
            for ($i=0;$i<10;$i++){
                echo "\t"."<div style='background-color: rgb($color[$i]);top:$top%'>&nbsp;</div>"."\n";
                $top++;
            }
        }
        $time=time();
        if (time()>$time+5){

            header('location:colores.php');
        }
        ?>
</body>
</html>