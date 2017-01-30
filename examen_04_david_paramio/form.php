<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="validacion.php" method="get">
    <label for="modelo" id="modelo">Modelo con el problema</label>
    <input type="text" id="modelo" name="modelo"><br>
    <label for="serie" id="serie">Nº de serie</label>
    <input type="text" id="serie" name="serie"><br>
    <label for="comentario" id="comentario">Comentario</label>
    <textarea name="comentario" id="comentario" cols="30" rows="10"></textarea><br>
    <button>Enviar</button>
</form>
</body>
</html>