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
            background-color: rgba(0,0,0,.93);
            color: white;
            width: 300px;
            margin: auto;
            margin-top: 200px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        input{
            margin: 10px;
        }
    </style>
</head>
<body>
    <form action="login.php" method="get" name="acceso" class="formulario">
        <label for="user">Nombre de Usuario</label><br>
        <input type="text" name="user" id="user"><br>
        <label for="pass">Constraseña</label><br>
        <input type="password" name="pass" id="pass"><br>
        <button>Enviar</button>
    </form>
</body>
</html>