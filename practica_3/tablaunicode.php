<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
        table{
            border-collapse: collapse;
        }
        td, th {
            border: 1px double black;
        }
        th{
            background-color: aquamarine;
        }
        td:nth-of-type(odd){
            background-color: antiquewhite;
        }
        td:nth-of-type(even){
            background-color: lightblue;
        }
        div{
            margin:auto;
            width: 70%;
        }
        table{
            width: 100%;
        }
        h1{
            text-align: center;
        }
    </style>
    <?php
        if (isset($_GET["pg"])){
            $pg=$_GET["pg"];
            if (is_numeric($pg)==false||$pg<1){
                $pg=1;
            }elseif ($pg>100){
                $pg=100;
            }
        }else{
            $pg=0;
        }
    ?>
</head>
<body>
<div>
<h1><a href="tablaunicode.php?pg=<?=($pg-1)?>">&lt</a>Tabla Unicode || Página <?=$pg?><a href="tablaunicode.php?pg=<?=($pg+1)?>">&gt</a></h1>
    <table>
        <?php
            //cabecera
            const TAM_COLUMNA=10;
            const TAM_FILA=20;
            $cont=($pg-1)*200+1;
            echo "\t<tr>\n";
            for ($i=1;$i<=TAM_COLUMNA;$i++) {
                echo "\t\t<th>código</th><th>valor</th>\n";
            }
            echo "\t</tr>\n";
            for ($i=1;$i<=TAM_FILA;$i++){
                echo "\t<tr>\n";
                for ($j=1;$j<=TAM_COLUMNA;$j++) {
                    echo "\t\t<td>$cont</td><td>&#".($cont).";</td>\n";
                    $cont++;
                }
            }
        ?>
    </table>
</div>
</body>
</html>