<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encriptación</title>
</head>
<body>
<form action="4.6.php" method="get">
    <label for="texto" id="texto">Escriba el texto a encriptar o desencriptar</label><br>
    <textarea name="texto" id="texto" cols="30" rows="10"></textarea>
    <fieldset>
        <legend>Elija lo que desea</legend>
        <input type="radio" id="encriptar" name="encriptar" value="1" checked>
        <label for="encriptar">Encriptar</label>
        <input type="radio" id="desencriptar" name="encriptar" value="2">
        <label for="desencriptar">Desencriptar</label>
    </fieldset>
    <label for="clave">Escriba la clave</label>
    <input type="number" id="clave" name="clave" max="99" min="1"><br>
    <button>Enviar</button>
</form>
</body>
</html>