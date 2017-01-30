<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
    <?php
        $array=array(
            "Palencia"=>80000,
            "Valladolid"=>306000,
            "Murcia"=>439000
        );
        function dibujarArray($array){
            echo "<table>";
            foreach ($array as $i=>$valor){
                echo "<tr><td>$i</td><td>$valor</td></tr>";
            }
            echo "</table>";
        }
        dibujarArray($array);
    ?>
</body>
</html>