<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Unicode</title>
    <style>
        form{
            text-align: center;
        }
        p{
            margin-bottom: 0;
        }
        input{
            width: 60px;
        }
    </style>
</head>
<body>
<form action="respuesta-unicode.php" method="get">
    <h1>Escribe el código (Unicode) para el carácter Árabe</h1>
    <p>Introduzca 4 dígitos hexadecimales entre el 0600 y el 06FF</p>
    <label for="numero" id="numero"></label>
    <input type="text" id="numero" name="numero"><br>
    <button>Comprobar</button>
</form>
</body>
</html>