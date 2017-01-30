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
        table{
            width: 100%;
            margin-bottom: 30px;
            margin-top: 5px;
            border-collapse: collapse;
        }
        td{
            width: 50%;
        }
        .correcto{
            color: #00c300;
        }
        .incorrecto{
            color: #c30000;
        }
        #titulo{
            padding: 20px;
            font-size: 1.2em;
        }
        #volver{
            margin-right: 30px;
        }
    </style>
</head>
<body>
<div class="formulario">
    <?php
    session_start();
    //Declaración de Variables
    $usuario=$_SESSION["usuario"];
    $ip_bd="172.16.0.29";
    $usu_db="paramio";
    $pass_db="paramio2017";
    $name_db="intranet";
    //Comprobar si ha iniciado sesión
    if (!$_SESSION["correcto"]){
        header("location:index.php");
    }else {
        if ($_SESSION["correcto"]) {
            //Conexión a la Base de Datos
            $conexion = new mysqli($ip_bd, $usu_db, $pass_db); // (1)crea un objeto con =new para conectar a la bd
            if ($conexion->connect_error) { //(2)comprobar si hay error en la conexión
                echo "Error durante la conexión";
            } else {
                $conexion->select_db($name_db);
                $query_intentos_totales = "select intentos_totales from usuarios where login=\"$usuario\"";
                $resultado_intentos_totales = $conexion->query($query_intentos_totales);
                $fila=$resultado_intentos_totales->fetch_assoc();
                $query_intentos_fallidos = "select intentos_fallidos from usuarios where login=\"$usuario\"";
                $resultado_intentos_fallidos = $conexion->query($query_intentos_fallidos);
                $fila_fallidos=$resultado_intentos_fallidos->fetch_assoc();
                echo "<table>";
                echo "<tr><td colspan='2' id='titulo'>Número de inicios de sesión:</td></tr>
                      <tr><td class='correcto'>Correctos</td><td class='incorrecto'>Incorrectos</td></tr>
                      <tr><td class='correcto'>".$fila["intentos_totales"]."</td><td class='incorrecto'>".$fila_fallidos["intentos_fallidos"]."</td></tr>";
                echo "</table>";
            }
        }else{
            header("location:index.php");
        }
    }
    ?>
    <a href="login_pr_04.php" id="volver">Volver</a>
    <a href=index.php>Cerrar Sesión</a>
</div>
</body>
</html>