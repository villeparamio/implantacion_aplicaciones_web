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
            display: none;
            margin-top: 0;
            text-align: center;
            font-size: 1.2em;
            background-color: red;
            color: white;
            width: 100%;
            <?php if ($_GET["error"]==1){
                echo "display:block";
            }?>;
        }
    </style>
</head>
<body>
    <h1>El usuario o la contraseña es incorrecto</h1>
    <form action="login.php" method="post" name="acceso" class="formulario">
        <label for="user">Nombre de Usuario</label><br>
        <input type="text" name="user" id="user"><br>
        <label for="pass">Constraseña</label><br>
        <input type="password" name="pass" id="pass"><br>
        <button>Enviar</button>
    </form>
</body>
</html>