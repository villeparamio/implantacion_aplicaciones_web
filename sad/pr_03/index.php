<?php
    session_start();
    if (isset($_SESSION["correcto"])){
        session_destroy();
    }
    if (isset($_GET["error"])){
        $error=$_GET["error"];
    }else{
        $error=0;
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intranet</title>
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
            background-color: rgba(0,0,0,.90);
            color: white;
            width: 300px;
            margin: auto;
            transform: translate(-50%, -50%);
            position: absolute;
            left: 50%;
            top: 50%;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        input{
            margin: 10px;
        }
        h1{
            margin: 0;
        }
        .error1{
            display: none;
            margin-top: 0;
            height: 25px;
            text-align: center;
            font-size: 1.2em;
            background-color: red;
            color: white;
            width: 100%;
            <?php if ($_GET["error"]==1){
                echo "display:block";
            }?>;
            <?php if ($_GET["error"]==2){
                echo "display:block";
            }?>;
        }
        .error2{
            display: none;
            text-align: center;
            font-size: 1.2em;
            background-color: red;
            color: white;
            width: 100%;
            <?php if ($_GET["error"]==2){
                echo "display:block";
            }?>;
        }
        input, button{
            background-color: rgba(255,255,255,0.6);
            border: none;
            border-radius: 5px;
            padding: 7px;
            font-family: 'Droid Sans', sans-serif;
            width: 200px;
            font-size: 1em;
        }
        button{
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <h1 class="error1">El usuario o la contraseña es incorrecto</h1>
    <h1 class="error2">Usuario bloqueado</h1>
    <form action="login.php" method="post" name="acceso" class="formulario">
        <label for="user">Nombre de Usuario</label><br>
        <input type="text" name="user" id="user" maxlength="7" minlength="5" <?php if ($error==2){
            echo "disabled";
        }?>><br>
        <label for="pass">Constraseña</label><br>
        <input type="password" name="pass" id="pass" <?php if ($error==2){
            echo "disabled";
        }?>><br>
        <button>Enviar</button>
    </form>
</body>
</html>