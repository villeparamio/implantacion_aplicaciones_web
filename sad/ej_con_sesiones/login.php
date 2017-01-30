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
            background-color: rgba(0,0,0,.93);
            color: white;
            width: 300px;
            margin: auto;
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
        #correcto{
            color: darkgreen;
        }
    </style>
</head>
<body>
    <div class="formulario">
        <?php
        session_start();
        //Usuario 1
            $user1="Andrés";
            $pass1="1224fd85454be0f98cf4b07d469c1670";
            $nombre1="Andrés";
            $apellido1="Iniesta";
            $apellido2="Martín";
            $rol1="Jefe";
        //Usuario2
            $user2="Miguelón";
            $pass2="c787d7d712628f94ea66a2982b6e801d";
            $nombre2="Miguel";
            $apellido3="Induráin";
            $apellido4="Larraya";
            $rol1="Empleado";
        //Usuario3
            $user3="admin";
            $pass3="81dc9bdb52d04dc20036dbd8313ed055";
            $nombre3="Administrador";
            $apellido5="Administrador";
            $apellido6="Paramio";
            $rol1="Jefe";
        //Declaración de Variables
            $usuario=$_POST["user"];
            $contraseña=$_POST["pass"];
            $md5=md5($contraseña);
        echo "<b>Usuario:</b> $usuario <br>";
        echo "<b>Contraseña:</b> $contraseña<br>";
        echo "<b>MD5:</b> $md5<br>";
        if ($usuario==$user1 && $md5==$pass1){
            //El usuario es correcto
            $_SESSION["correcto"]=1;

            if ($_SESSION["correcto"]){
                echo '<a href="" style="text-decoration: none">Bienvenido al sistema<a/>';
                echo "<br>$nombre1 $apellido1 $apellido2";
                echo "<br><a href=#>Dar de alta un usuario</a>";
            }else{
                session_destroy();
            }

            echo "<p id='correcto'>Usuario Correcto</p>";
        }elseif($usuario==$user2 && $md5==$pass2) {
            //El usuario es correcto
            $_SESSION["correcto"] = 2;

            if ($_SESSION["correcto"]) {
                echo '<a href="" style="text-decoration: none">Bienvenido al sistema <a/>';
                echo "<br>$nombre2 $apellido3 $apellido4";
            } else {
                session_destroy();
            }
            echo "<p id='correcto'>Usuario Correcto</p>";
        }elseif($usuario==$user3 && $md5==$pass3) {
            //El usuario es correcto
            $_SESSION["correcto"] = 3;

            if ($_SESSION["correcto"]) {
                echo '<a href="" style="text-decoration: none">Bienvenido al sistema <a/>';
                echo "<br>$nombre3 $apellido5 $apellido6";
            } else {
                session_destroy();
            }
            echo "<p id='correcto'>Usuario Correcto</p>";
        }else{
            header('location:index.php?error=1');
        }
        ?>
        <a href=index.php>Cerrar Sesión</a>
    </div>
</body>
</html>