<?php
include "libreria4.php";
for ($i=1;$i<=200;$i++){
    $a=mt_rand(1,5000);
    echo $a;
    echo parImpar($a)."<br>";
}