<?php

for ($i=0;$i<1000;$i++){
    $aleatorio[$i]=mt_rand(1,100);
}

print_r($aleatorio);
$i=5;
foreach ($aleatorio as $i=>$valor){
    echo "<br>El índice $i vale $valor";
}

