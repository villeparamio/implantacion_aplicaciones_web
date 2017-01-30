<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
    <style>
        p{
            margin: 0;
        }
        strong{
            color: rgb(0,0,255);
        }
    </style>
</head>
<body>
<?php
//Recoje nombre apellidos, usuario, dni o nie, telefono

/*      Errores:
            - El nombre y apellidos haya algo diferente a letras y espacios
        Usuario:
            - Empezar por letra, luego letras o números
            - Mínimo 6
        DNI y NIE:
            - 8 numeros y letra
            - x y z seguida de 7 numeros y letra
            - La letra cumple esta fórmula
                *Se divide el número entero entre 23 y el resto es el índice de este array
                *TRWAGMY...
                *Si hay primera letra la x --> 0, y --> 1, z --> 2
         Teléfono 9 números (6,7,9)
 */
    if (!isset($_GET["nombre"])||!isset($_GET["apellido1"])||!isset($_GET["apellido2"])||!isset($_GET["dni"])||!isset($_GET["telefono"])||!isset($_GET["usuario"])){
           header("location: index.php?error=404");
        }else{
    //variables
            $nombre=$_GET["nombre"];
            $apellido1=$_GET["apellido1"];
            $apellido2=$_GET["apellido2"];
            $dni=$_GET["dni"];
            $telefono=$_GET["telefono"];
            $usuario=$_GET["usuario"];
            $error=0;
    }
    //Expresiones
        $exp_nom="/(*UTF8)^[\p{L}\s]*$/i";
        $exp_dni="/^([0-9]{8}[A-Z])|([XYZ][0-9]{7}[A-Z])$/";
        $exp_tel="/^[679][0-9]{8}$/";
        $exp_usu="/(*UTF8)^[\p{L}]([\p{L}]|\d){5,}/i";
    //condiciones
        if (preg_match($exp_nom,$nombre)){
            echo "<p>El nombre <strong>\"$nombre\"</strong> es correcto</p><br>";
        }else{
            $error=$error+1;
        }
        if (preg_match($exp_nom,$apellido1)){
            echo "<p>El primer apellido <strong>\"$apellido1\"</strong> es correcto</p><br>";
        }else{
            $error=$error+2;
        }
        if (preg_match($exp_nom,$apellido2)){
            echo "<p>El segundo apellido <strong>\"$apellido2\"</strong> es correcto</p><br>";
        }else{
            $error=$error+4;
        }
        if (preg_match($exp_tel, $telefono)){
            echo "<p>El número de telefono <strong>\"$telefono\"</strong> es correcto</p><br>";
        }else{
            $error=$error+16;
        }
        if (preg_match($exp_dni, $dni)){
            $primero=substr($dni,0,1);
            $letras2="TRWAGMYFPDXBNJZSQVHLCKE";
            if (is_numeric($primero)){
                $numero=substr($dni,0,8);
                $resto=$numero%23;
                $letra=substr($dni,8);
                if ($letra==$letras2[$resto]){
                    echo "<p>El DNI o NIE <strong>\"$dni\"</strong> es correcto</p><br>";
                }else{
                    $error=$error+8;
                }
            }else{
                $numero=substr($dni,1,7);
                if ($primero=="X"){
                    $resto=$numero%23;
                    $letra=substr($dni,8);
                    if ($letra==$letras2[$resto]){
                        echo "<p>El DNI o NIE <strong>\"$dni\"</strong> es correcto</p><br>";
                    }
                }elseif ($primero=="Y"){
                    $numero2="1".$numero;
                    $resto=$numero2%23;
                    $letra=substr($dni,8);
                    if ($letra==$letras2[$resto]){
                        echo "<p>El DNI o NIE <strong>\"$dni\"</strong> es correcto</p><br>";
                    }
                }elseif ($primero=="Z"){
                    $numero2="2".$numero;
                    $resto=$numero2%23;
                    $letra=substr($dni,8);
                    if ($letra==$letras2[$resto]){
                        echo "<p>El DNI o NIE <strong>\"$dni\"</strong> es correcto</p><br>";
                    }
                }else{
                    $error=$error+8;
                }
            }
        }else{
            $error=$error+8;
        }
        if (preg_match($exp_usu, $usuario)){
            echo "<p>El nombre de usuario <strong>\"$usuario\"</strong> es correcto</p><br>";
        }else{
            $error=$error+32;
        }
        if ($error>0){
            header("location: index.php?error=$error&nombre=$nombre&apellido1=$apellido1&apellido2=$apellido2&dni=$dni&telefono=$telefono&usuario=$usuario");
        }
?>
</body>
</html>