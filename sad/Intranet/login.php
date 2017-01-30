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
            background-color: rgba(0,0,0,.93);
            color: white;
            width: 300px;
            margin: auto;
            margin-top: 200px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        p{
            font-size: 2em;
        }
        a{
            color: white;
        }
        #incorrecto{
            color: darkred;
        }
        #correcto{
            color: darkgreen;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <?php
        session_start();
        //echo "<br>".session_id();
        $user="davidp";
        $usuario=$_POST["user"];
        $texto="qwerty";
        $contraseña=$_POST["pass"];
        $pass=md5($texto);
        $md5=md5($contraseña);
        echo "<b>Usuario:</b> $usuario <br>";
        echo "<b>Contraseña:</b> $contraseña<br>";
        echo "<b>MD5:</b> $md5<br>";
        if ($_POST["user"]==$user && md5($_POST["pass"])==$pass){
            //El usuario es correcto
            $_SESSION["correcto"]=1;

            if ($_SESSION["correcto"]){
                echo '<a href="">Dar de alta.<a/>';
            }else{
                session_destroy();
                header('location:index.php');
            }

            echo "<p id='correcto'>Usuario Correcto</p>";
        }else{
            echo"<p id='incorrecto'>Usuario Incorrecto</p>";
        }
        ?>
        <a href="index.php">Volver</a>
    </div>
</body>
</html>
