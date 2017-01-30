<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
<?php
//cabecera
const TAM_COLUMNA=8;
const TAM_FILA=16;
$cont=0;
echo "\t<tr>\n";
for ($i=1;$i<=TAM_COLUMNA;$i++) {
    echo "\t\t<th>código</th><th>valor</th>\n";
}
echo "\t</tr>\n";
for ($i=1;$i<=TAM_FILA;$i++){
    echo "\t<tr>\n";
    for ($j=1;$j<=TAM_COLUMNA;$j++) {
        echo "\t\t<td>$cont</td><td>".chr($cont)."</td>\n";
        $cont++;
    }
}
?>
</table>
</body>
</html>