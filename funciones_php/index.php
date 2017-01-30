<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
        include "libreria4.php";
    ?>
    <style>
        td{
            border: 2px solid black;
        }
    </style>
</head>
<body>
<form action="index.php">
    <h1>Ejercicio 1</h1>
    <input type="number" name="n" placeholder="Inserte un número">
    <h1>Ejercicio 2</h1>
    <input type="number" name="x" placeholder="Inserta un valor para X">
    <input type="number" name="y" placeholder="Inserta un valor para Y">
    <h1>Ejercicio 3</h1>
    <input type="text" name="a" placeholder="Inserte un texto para A">
    <input type="text" name="b" placeholder="Inserte un texto para B">
    <input type="text" name="c" placeholder="Inserte un texto para C">
    <h1>Ejercicio 4: Par o Impar</h1>
    <input type="number" name="parimpar" placeholder="Inserte un numero">
    <h1>Ejercicio 7: Triángulo</h1>
    <input type="number" name="l1" placeholder="Inserte lado a">
    <input type="number" name="l2" placeholder="Inserte lado b">
    <input type="number" name="l3" placeholder="Inserte lado c">
    <h1>Ejercicio 9: Suma Pequeños</h1>
    <input type="number" name="n1" placeholder="Inserte un número">
    <input type="number" name="n2" placeholder="Inserte un número">
    <input type="number" name="n3" placeholder="Inserte un número">
    <h1>Ejercicio 10: Raíz cuadrada</h1>
    <input type="number" name="raiz" placeholder="Inserte un número">
    <h1>Ejercicio 11: Cuadrado</h1>
    <input type="number" name="cuadrado" placeholder="Inserte un número entero">
    <h1>Ejercicio 12: Primo</h1>
    <input type="number" name="primo" placeholder="Inserte un número entero">
    <br><button>Enviar</button>

</form>
<?php
    if (isset($_GET["n"])){
        echo "<p>ejercicio 1 = ";
        echo f1($_GET["n"]);
        echo "</p><br>";
    }
    if (isset($_GET["x"]) && isset($_GET["y"])){
        echo "<p>ejercicio 2 = ";
        echo f2($_GET["x"],($_GET["y"]));
        echo "</p><br>";
    }
    if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["c"])){
        echo "<p>ejercicio 3 = ";
        diagonal($_GET["a"],($_GET["b"]),($_GET["c"]));
        echo "</p><br>";
    }
    if (isset($_GET["parimpar"])){
        echo "<p>ejercicio 4 = ";
        echo parImpar($_GET["parimpar"]);
        echo "</p><br>";
    }
    if (isset($_GET["l1"]) && isset($_GET["l2"]) && isset($_GET["l3"])){
        echo "<p>ejercicio 7 = ";
        echo tipoTriangulo($_GET["l1"],($_GET["l2"]),($_GET["l3"]));
        echo "</p><br>";
    }
    if (isset($_GET["l1"]) && isset($_GET["l2"]) && isset($_GET["l3"])){
        echo "<p>ejercicio 8 = ";
        echo tipoTriangulo2($_GET["l1"],($_GET["l2"]),($_GET["l3"]));
        echo "</p><br>";
    }
    if (isset($_GET["l1"]) && isset($_GET["l2"]) && isset($_GET["l3"])){
        echo "<p>ejercicio 9 = ";
        echo sumaPequenos($_GET["n1"],($_GET["n2"]),($_GET["n3"]));
        echo "</p><br>";
    }
    if (isset($_GET["raiz"])){
        echo "<p>ejercicio 10 = ";
        echo raiz2perfecta($_GET["raiz"]);
        echo "</p><br>";
    }
    if (isset($_GET["cuadrado"])){
        echo "<p>ejercicio 11 = ";
        if(cuadrado($_GET["cuadrado"])) echo "cuadrado";
        else echo "No es cuadrado";
        echo "</p><br>";
    }
    if (isset($_GET["primo"])){
        echo "<p>ejercicio 12 = ";
        echo esPrimo($_GET["primo"]);
        echo "</p><br>";
    }
    ?>
</body>
</html>