<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>
    <?php
    $login="amadapa";
    $password="25f9e794323b453885f5181f1b624d0b";
        $usuario1=array(
            "nombre"=>"Amador",
            "apellido1"=>"Aparicio",
            "apellido2"=>"de la Fuente",
            "login"=>"amadapa",
            "password"=>"25f9e794323b453885f5181f1b624d0b",
            "tipo"=>'a'
        );
        $usuario2=array(
            "nombre"=>"David",
            "apellido1"=>"Paramio",
            "apellido2"=>"Calvo",
            "login"=>"villeparamio",
            "password"=>"25f9e794323b453885f5181f1b624d0b",
            "tipo"=>'a'
        );

        if ($login===$usuario1["login"] && $password=$usuario1["password"]){
            //usuario correcto
            echo "Usuario Correcto";
        }else{
            echo "Usuario Incorrecto";
        }

            /*$nombre="David";
        $temperaturas=array(
        0=>20,
        1=>22,
        2=>30,
        3=>'David'
        );
        echo var_dump($temperaturas);
        echo count($temperaturas);
        //Búsqueda tradicional
        for ($i=0;$i<count($temperaturas);$i++){
        if ($nombre==$temperaturas[$i]){
            echo "oleeee $i";
        }
        }*/


    ?>
</body>

</html>

