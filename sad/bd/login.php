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
        //Declaración de Variables
            $usuario=$_POST["user"];
            $contraseña=$_POST["pass"];
            $md5=md5($contraseña);
            $fecha=time();
            $conexion=new mysqli("127.0.0.1","root",""); // (1)crea un objeto con =new para conectar a la bd
                if($conexion->connect_error){ //(2)comprobar si hay error en la conexión
                    echo "Error durante la conexión";
                }else{
                    $conexion->select_db("intranet"); //(3) Selecciono la BD si no se ha producido error en la conexión
                    $query="select count(*) as num from usuarios
                             where login='".$_POST["user"]."' and pass='".$_POST["pass"]."'";
                    $resultado=$conexion->query($query); //(4) Realizo la consulta a la BD
                    $fila=$resultado->fetch_assoc();//(5) Transformo el resultado en un array asociativo
                    if ($fila["num"]>0){
                        echo "<p style='color: rgb(0,255,0)'>Usuario Correcto</p><br>";
                        $_SESSION["correcto"]=1;
                    }else{
                        header("location:1conexionbd.php");
                    }
                }

         //Condiciones del login

            if ($_SESSION["correcto"]) {
                $conexion->select_db("intranet");
                $query_nom="select nombre, apellido1, apellido2 as nom from usuarios
                             where login='".$_POST["user"]."' and pass='".$_POST["pass"]."'";
                    $resultado_nom=$conexion->query($query_nom);
                    $fila_nom=$resultado_nom->fetch_asoc();
                    echo "<p>Bienvenido al sistema:<br>" . " " .$fila_nom["nom"];
                    echo "<p>Fecha actual:" . " " . date("d-m-Y (H:i:s)", $fecha) . "</p><br>";
            }else{
                header("location:1conexionbd.php");
            }
        ?>
        <a href=1conexionbd.php>Cerrar Sesión</a>
    </div>
</body>
</html>