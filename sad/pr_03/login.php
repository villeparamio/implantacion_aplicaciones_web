<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Droid+Sans');
        body{
            background-image: url("fondo.jpg");
            background-size: cover;
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: 'Droid Sans', sans-serif;
        }
        .formulario{
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
            background-color: rgba(0,0,0,.90);
            color: white;
            width: 300px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        p{
            font-size: 1.5em;
        }
        a{
            color: white;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <?php
        session_start();
        //Usuario 1
            $usuario1=array(
                "nombre"=>"David",
                "apellido1"=>"Paramio",
                "apellido2"=>"Calvo",
                "login"=>"villeparamio",
                "password"=>"25f9e794323b453885f5181f1b624d0b",//123456789
                "tipo"=>'a'
            );
         //Usuario 2
            $usuario2=array(
                "nombre"=>"Pablo",
                "apellido1"=>"Iglesias",
                "apellido2"=>"Turrión",
                "login"=>"coletas",
                "password"=>"25f9e794323b453885f5181f1b624d0b",//123456789
                "tipo"=>''
            );
        //Usuario 2
            $usuario3=array(
                "nombre"=>"Mariano",
                "apellido1"=>"Rajoy",
                "apellido2"=>"Brey",
                "login"=>"manostijeras",
                "password"=>"25d55ad283aa400af464c76d713c07ad",//12345678
                "tipo"=>''
            );
        //Declaración de Variables
            $usuario=$_POST["user"];
            $contraseña=$_POST["pass"];
            $md5=md5($contraseña);
            $fecha=time();
         //Condiciones del login

            if (!isset($_SESSION["cont"])){
                $_SESSION["cont"]=1;
                if ($usuario==$usuario1["login"] && $md5==$usuario1["password"]) {
                    $_SESSION["correcto"] = 1;

                    if ($_SESSION["correcto"]) {
                        if ($usuario1["tipo"] == "a") {
                            echo "<p>Bienvenido al sistema:<br>" . " " . $usuario1["nombre"] . " " . $usuario1["apellido1"] . " " . $usuario1["apellido2"] . "</p><br>";
                            echo "<p>Fecha actual:" . " " . date("d-m-Y (H:i:s)", $fecha) . "</p><br>";
                            echo "<p>Usuarios registrados en el sistema:"." ".$usuario1["login"]." ".$usuario2["login"]." ".$usuario3["login"]."</p><br>";
                        } else {
                            echo "<p>Bienvenido al sistema:<br>" . " " . $usuario1["nombre"] . " " . $usuario1["apellido1"] . " " . $usuario1["apellido2"] . "</p><br>";
                            echo "<p>Fecha actual:" . " " . date("d-m-Y (H:i:s)", $fecha) . "</p><br>";
                        }
                    }
                }elseif ($usuario==$usuario2["login"] && $md5==$usuario2["password"]){
                    //El usuario es correcto
                    $_SESSION["correcto"]=1;

                    if ($_SESSION["correcto"]){
                        if ($usuario2["tipo"]=="a"){
                            echo "<p>Bienvenido al sistema:<br>"." ".$usuario2["nombre"]." ".$usuario2["apellido1"]." ".$usuario2["apellido2"]."</p><br>";
                            echo "<p>Fecha actual:"." ".date("d-m-Y (H:i:s)", $fecha)."</p><br>";
                            echo "<p>Usuarios registrados en el sistema:"." ".$usuario1["login"]." ".$usuario2["login"]." ".$usuario3["login"]."</p><br>";
                        }else{
                            echo "<p>Bienvenido al sistema:<br>"." ".$usuario2["nombre"]." ".$usuario2["apellido1"]." ".$usuario2["apellido2"]."</p><br>";
                            echo "<p>Fecha actual:"." ".date("d-m-Y (H:i:s)", $fecha)."</p><br>";
                        }
                    }
                }elseif ($usuario==$usuario3["login"] && $md5==$usuario3["password"]){
                    //El usuario es correcto
                    $_SESSION["correcto"]=1;

                    if ($_SESSION["correcto"]){
                        if ($usuario3["tipo"]=="a"){
                            echo "<p>Bienvenido al sistema:<br>"." ".$usuario3["nombre"]." ".$usuario3["apellido1"]." ".$usuario3["apellido2"]."</p><br>";
                            echo "<p>Fecha actual:"." ".date("d-m-Y (H:i:s)", $fecha)."</p><br>";
                            echo "<p>Usuarios registrados en el sistema:"." ".$usuario1["login"]." ".$usuario2["login"]." ".$usuario3["login"]."</p><br>";
                        }else{
                            echo "<p>Bienvenido al sistema:<br>"." ".$usuario3["nombre"]." ".$usuario3["apellido1"]." ".$usuario3["apellido2"]."</p><br>";
                            echo "<p>Fecha actual:"." ".date("d-m-Y (H:i:s)", $fecha)."</p><br>";
                        }
                    }
                }else{
                    header('location:index.php?error=1');
                    $_SESSION["time"]=time();
                }
            }else{
                $_SESSION["cont"]++;
                if ($_SESSION["cont"]>=3){
                    header('location:index.php?error=2');
                }else{
                    header('location:index.php?error=1');
                }
            }
        ?>
        <a href=index.php>Cerrar Sesión</a>
    </div>
</body>
</html>