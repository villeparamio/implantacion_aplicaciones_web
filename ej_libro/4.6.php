<?php
$texto=$_GET["texto"];
$clave=$_GET["clave"];
$e_d=$_GET["encriptar"]; //variable para encriptar si es 1 o desencriptar si es 2

function encriptar($texto, $clave){
    $max=strlen($texto);
    $salida="";
    for ($i=0; $i<$max; $i++){
        $salida.=chr(ord($texto[$i])+$clave); //suma la clave a los numeros del string
    }
    return $salida;
}
function desencriptar($texto, $clave){
    $max=strlen($texto);
    $salida="";
    for ($i=0; $i<$max; $i++){
        $salida.=chr(ord($texto[$i])-$clave); //suma la clave a los numeros del string
    }
    return $salida;
}
if ($e_d==1){
    echo encriptar($texto, $clave);
}elseif ($e_d==2){
    echo desencriptar($texto, $clave);
}
echo "<br><a href='4.6_index.php'>Volver</a>";
/*
function cesar($texto, $clave){
    //recorrer el texto letra a letra
    $res="";
    for ($i=0;$i<strlen($texto); $i++){
        $res.=chr(ord($texto[$i])+$clave);
    }
    echo $res;
}
cesar($texto, $clave);
*/