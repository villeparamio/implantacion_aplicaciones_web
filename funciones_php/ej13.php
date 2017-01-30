<?php
include "libreria4.php";
for ($i=2;$i<1000;$i++){
    $primo=$i;
    if (esPrimo($primo)){
        echo $primo."<br>";
    }
}