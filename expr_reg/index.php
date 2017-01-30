/*4.4, 4.6, 4.9, 4.11*/
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario</title>
    <style>
        body{
            margin: 0;
        }
        h2{
            margin: 0;
            text-align: center;
            background-color: red;
            color: white;
        }
        form{
            margin: 20px;;
        }
    </style>
</head>
<body>
<?php
if (isset($_GET["error"])){
    $error=$_GET["error"];
    if ($error==404){
        echo "<h2>No se ha recibido ningún parámetro</h2>";
    }
    if ($error&1){
        echo "<h2>El formato del nombre no es correcto</h2>";
    }
    if ($error&2){
        echo "<h2>El formato del primer apellido no es correcto</h2>";
    }
    if ($error&4){
        echo "<h2>El formato del segundo apellido no es correcto</h2>";
    }
    if ($error&8){
        echo "<h2>El formato del DNI o NIE no es correcto</h2>";
    }
    if ($error&16){
        echo "<h2>El formato del teléfono no es correcto</h2>";
    }
    if ($error&32){
        echo "<h2>El formato del usuario no es correcto</h2>";
    }
}
?>
<form action="pr_4.5.php" method="get">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?php if(isset($_GET["nombre"])){
        echo $_GET['nombre'];
    }?>"><br>
    <input type="text" name="apellido1" id="apellido1" placeholder="Primer Apellido" value="<?php if(isset($_GET["apellido1"])){
        echo $_GET['apellido1'];
    }?>"><br>
    <input type="text" name="apellido2" id="apellido2" placeholder="Segundo Apellido" value="<?php if(isset($_GET["apellido2"])){
        echo $_GET['apellido2'];
    }?>"><br>
    <input type="text" name="dni" id="dni" placeholder="DNI o NIE" value="<?php if(isset($_GET["dni"])){
        echo $_GET['dni'];
    }?>"><br>
    <input type="text" name="telefono" id="telefono" placeholder="Número de teléfono" value="<?php if(isset($_GET["telefono"])){
        echo $_GET['telefono'];
    }?>"><br>
    <input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario" value="<?php if(isset($_GET["usuario"])){
        echo $_GET['usuario'];
    }?>"><br>
    <button>Enviar</button>
</form>
</body>
</html>