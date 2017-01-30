<?php
$texto="rexytcuublmioñ,urcyio";
// dos funciones regulares principales, PCRE --> Perl

$exp="/(*UTF8)Ñ/i";   //se utiliza para carácteres que no están en UTF8
if (preg_match($exp,$texto)){
    echo "lo cumple";
}else{
    echo "no lo cumple";
}