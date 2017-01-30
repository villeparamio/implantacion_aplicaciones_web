<?php
if (isset($_GET["modelo"])&&isset($_GET["serie"])&&isset($_GET["comentario"])){
    $modelo=$_GET["modelo"];
    $serie=$_GET["serie"];
    $comentario=$_GET["comentario"];
}else{
    echo "Se necesita enviar el nº de serie, de modelo y comentario";
}

//expresiones
    $exp_modelo="/^([R][0-9]{4}[SX])||([S][0-9]{3}[L][T])$/";
    $exp_serie_s="/^([A-Z]{3}[0-9]{8}[1-3])$/";
    $exp_serie_x="/^([A-Z]{3}[0-9]{8}[4-6])$/";
    $exp_serie_lt="/^([A-Z]{3}[0-9]{8}([7-9]||[A]))$/";
    $exp_comment="/^[ ]{0,}$/";

if (preg_match($exp_comment, $comentario)){
    echo "Falta rellenar el apartado de comentarios";
}else{
    $comment_correcto=1;
}
$serie_correcto="0";
$modelo_correcto="0";
if (preg_match($exp_modelo, $modelo)){
    $modelo_correcto=1;
    $primera=substr($modelo, 0,1);
    if ($primera=="R"){
        $ultima=substr($modelo, 5,6);
        if ($ultima=="S"){
            if (preg_match($exp_serie_s, $serie)){
                $serie_correcto="1";
            }else{
                $serie_correcto="0";
                echo "Numero de serie no válido";
            }
        }elseif ($ultima=="X"){
            if (preg_match($exp_serie_x, $serie)){
                $serie_correcto="1";
            }else{
                $serie_correcto="0";
                echo "Numero de serie no válido";
            }
        }else{
            $serie_correcto="0";
            echo "Numero de serie no válido";
        }
    }elseif ($primera=="S"){
        $ultima=substr($modelo, 4,6);
        if ($ultima=="LT"){
            if (preg_match($exp_serie_lt, $serie)){
                $serie_correcto="1";
            }else{
                $serie_correcto="0";
                echo "Numero de serie no válido";
            }
        }else{
            $serie_correcto="0";
            echo "Numero de serie no válido";
        }
    }else{
        $serie_correcto="0";
        echo "Numero de serie no válido";
    }
}else{
    echo "Número de modelo no válido";
    $modelo_correcto="0";
}
if ($serie_correcto&&$modelo_correcto=1){
    echo "Datos Correctos";
}




