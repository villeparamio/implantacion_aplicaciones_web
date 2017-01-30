<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Acumulación de sumas</title>
</head>
<body>
<?php
    if (isset($_GET["n"])){
    $n=$_GET["n"];
    }else{
        $n="";
    }
?>
<form action="acumulacionsumas.php" method="get">
    <label for="numero">Escribe un número</label>
    <input type="number" id="numero" name="numero" value="<?= $n?>"><br>
    <button>Enviar</button>
</form>
</body>
</html>