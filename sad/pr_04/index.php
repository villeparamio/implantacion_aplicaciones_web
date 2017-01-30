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
            background-image: url("../bd/fondo.jpg");
            background-size: cover;
            width: 100%;
            height: 100%;
            margin: 0;
            font-family: 'Droid Sans', sans-serif;
        }
        .formulario{
            background-color: rgba(0,0,0,.90);
            color: #E2F647;
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
        h1{
            margin: 0;
        }
        input{
            background-color: rgba(255,255,255,0.6);
            border: none;
            border-radius: 20px;
            padding: 7px;
            padding-left: 18px;
            font-family: 'Droid Sans', sans-serif;
            width: 180px;
            font-size: 1.1em;
            margin: 10px;
        }
        button{
            background: #3498db;
            background-image: linear-gradient(to bottom, #3498db, #2872a7);
            border-radius: 28px;
            color: #ffffff;
            padding: 10px 20px 10px 20px;
            text-decoration: none;
            font-size: 1.2em;
            border: none;
            width: 200px;
        }
        button:hover {
            background: #3cb0fd;
            background-image: linear-gradient(to bottom, #3cb0fd, #3289c9);
        }
    </style>
</head>
<body>
    <form action="login_pr_04.php" method="post" name="acceso" class="formulario">
        <label for="user">Nombre de Usuario</label><br>
        <input type="text" name="login" id="user" maxlength="15" minlength="5"><br>
        <label for="pass">Constraseña</label><br>
        <input type="password" name="password" id="pass"><br>
        <button>Enviar</button>
    </form>
</body>
</html>