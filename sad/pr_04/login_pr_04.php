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
            background-image: url("../bd/fondo.jpg");
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
            color: #E2F647;
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
            background: #3498db;
            background-image: linear-gradient(to bottom, #3498db, #2980b9);
            border-radius: 28px;
            color: #ffffff;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
        }
        a:hover {
            background: #3cb0fd;
            background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
        }
        #intentos{
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div class="formulario">
    <?php
    session_start();
    //Declaración de Variables
    if (!isset($_POST["login"])){
        $usuario=0;
    }else{
        $usuario=$_POST["login"];
    }
    if (!isset($_POST["password"])){
        $contraseña=0;
    }else{
        $contraseña=$_POST["password"];
    }
    $sha1=sha1($contraseña);
    $fecha=time();
    $ip_bd="172.16.0.29";
    $usu_db="paramio";
    $pass_db="paramio2017";
    $name_db="intranet";
    $commit="commit";
    if (!isset($_SESSION["usuario"])){
        $_SESSION["usuario"]=$usuario;
    }
    if (!isset($_SESSION["pass"])){
        $_SESSION["pass"]=$sha1;
    }

    if (isset($_SESSION["correcto"])){
        if ($_SESSION["correcto"]) {
            $conexion = new mysqli($ip_bd, $usu_db, $pass_db);
            $conexion->select_db($name_db);
            $usuario_session = $_SESSION["usuario"];
            $sha1_session = $_SESSION["pass"];
            $query_nombre = "select * from usuarios where login=\"$usuario_session\" and password=\"$sha1_session\"";
            $resultado_nombre = $conexion->query($query_nombre);
            $fila_nombre = $resultado_nombre->fetch_assoc();
            echo "<p>Bienvenido al sistema:<br>" . $fila_nombre["nombre"] . " " . $fila_nombre["apellido1"] . " " . $fila_nombre["apellido2"];
            echo "<p>Fecha actual:" . " " . date("d-m-Y (H:i:s)", $fecha) . "</p><br>";
        }else{
            header("location:index.php");
        }
    }else {
        //Conexión a la Base de Datos
        $conexion = new mysqli($ip_bd, $usu_db, $pass_db); // (1)crea un objeto con =new para conectar a la bd
        if ($conexion->connect_error) { //(2)comprobar si hay error en la conexión
            echo "Error durante la conexión";
        } else {
            $conexion->select_db($name_db); //(3) Selecciono la BD si no se ha producido error en la conexión
            $query = "select count(*) as num from usuarios
                             where login=\"$usuario\" and password=\"$sha1\"";
            $resultado = $conexion->query($query); //(4) Realizo la consulta a la BD
            $fila = $resultado->fetch_assoc();//(5) Transformo el resultado en un array asociativo
            if ($fila["num"] > 0) {
                echo "<p style='color: rgb(0,255,0)'>Usuario Correcto</p><br>";
                $_SESSION["correcto"] = 1;
                $_SESSION["usuario"] = $usuario;
                $query_intento_correcto = "update usuarios set intentos_totales=intentos_totales+1 where login=\"$usuario\" and password=\"$sha1\"";
                $conexion->query($query_intento_correcto);
                $conexion->query($commit);
                $query_nombre="select * from usuarios where login=\"$usuario\" and password=\"$sha1\"";
                $resultado_nombre=$conexion->query($query_nombre);
                $fila_nombre=$resultado_nombre->fetch_assoc();
                echo "<p>Bienvenido al sistema:<br>".$fila_nombre["nombre"]." ".$fila_nombre["apellido1"]." ".$fila_nombre["apellido2"];
                echo "<p>Fecha actual:" . " " . date("d-m-Y (H:i:s)", $fecha) . "</p><br>";
            } else {
                $query_intento_fallido = "update usuarios set intentos_fallidos=intentos_fallidos+1 where login=\"$usuario\"";
                $conexion->query($query_intento_fallido);
                $conexion->query($commit);
                header("location:index.php");
            }
        }
    }
    ?>
    <a href="intentos.php" id="intentos">Ver intentos</a>
    <a href=index.php>Cerrar Sesión</a>
</div>
</body>
</html>