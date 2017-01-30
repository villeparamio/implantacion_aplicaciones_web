<?php
    //*****************Ejercicio 1********************//
    function f1($n){
        return ($n*$n)/3;
    }
    //*****************Ejercicio 2********************//
    function f2($x,$y){
        return (($y+$x)/($x-1))-1;
    }
    //*****************Ejercicio 3********************//
    function diagonal($a,$b,$c){
        echo "<table>";
        for ($i=1;$i<=3;$i++){
            echo "\t<tr>\n";
            for ($j=1;$j<=3;$j++) {
                if ($j==1&&$i==1){
                    echo "\t\t<td>$a</td>\n";
                }else{
                    if ($i==2&&$j==2){
                        echo "\t\t<td>$b</td>\n";
                    }else{
                        if ($j==3&&$i==3){
                            echo "\t\t<td>$c</td>\n";
                        }else{
                            echo "\t\t<td>&nbsp;</td>\n";
                        }
                    }
                }
            }
            echo "\t</tr>\n";
        }
        echo "</table>";
    }
    //*****************Ejercicio 4********************//
    function parImpar($parimpar){
        if ($parimpar%2==0){
            return "Par";
        }else{
            return "Impar";
        }
    }
    //*****************Ejercicio 6********************//
    function multiplo2y3y5($multiplo){
        /*if ($multiplo%2==0 && $multiplo%3==0 && $multiplo%5==0){
            return true;
        }else{
            return false;
        }*/
        return ($multiplo%2==0 && $multiplo%3==0 && $multiplo%5==0);
    }
    //*****************Ejercicio 7********************//
    function tipoTriangulo($l1,$l2,$l3){
        if ($l1==$l2 && $l2==$l3){
            return "Equilatero";
        }else{
            if ($l1!=$l2 && $l1==$l3 || $l1!=$l3 && $l1==$l2 || $l3!=$l1 && $l2==$l3){
                return "Isosceles";
            }else{
                if ($l1!=$l2 && $l2!=$l3){
                    return "Escaleno";
                }else{
                    return "Error";
                }
            }
        }
    }
    //*****************Ejercicio 8********************//
    function tipoTriangulo2($l1,$l2,$l3){
        if ($l1+$l2>$l3 && $l1+$l3>$l2 && $l2+$l3>$l1){
            if ($l1==$l2 && $l2==$l3){
                return "Equilatero";
            }else{
                if ($l1!=$l2 && $l1==$l3 || $l1!=$l3 && $l1==$l2 || $l3!=$l1 && $l2==$l3){
                    return "Isosceles";
                }else{
                    if ($l1!=$l2 && $l2!=$l3){
                        return "Escaleno";
                    }else{
                        return "Error";
                    }
                }
            }

        }else{
            return "Invalido";
        }
    }
    //*****************Ejercicio 9********************//
    function sumaPequenos($n1,$n2,$n3){
        if ($n1<$n2 && $n1<$n3){
            if ($n2<$n3){
                return $n1+$n2;
            }else{
                return $n1+$n3;
            }
        }elseif ($n2<$n1 && $n2<$n3){
            if ($n1<$n3){
                return $n2+$n1;
            }else{
                return $n2+$n3;
            }
        }else{
            if ($n1<$n2){
                return $n3+$n1;
            }else{
                return $n3+$n2;
            }
        }
    }

    //*****************Ejercicio 10********************//
     function raiz2perfecta($raiz){
         for ($i=1;$i<=$raiz;){
             if ($i*$i==$raiz){
                 return $i;
             }
             $i++;
         }
         return -1;
     }

    /*function raiz2perfecta($raiz){
            $total = sqrt($raiz);
            $decimal=($total-intval($total));
            if ($decimal+$total==$total){
                return $total;
            }else{
                return "La raíz cuadrada no es perfecta";
            }
     }*/
    //*****************Ejercicio 11********************//
    function cuadrado($cuadrado){
         for ($i=1;$i<=$cuadrado;){
             if ($i*$i==$cuadrado){
                 return true;
             }
             $i++;
         }
         return false;
    }

    /*function cuadrado($cuadrado){
        $total = sqrt($cuadrado);
        $decimal=($total-intval($total));
        if ($decimal+$total==$total){
            return true;
        }else{
            return false;
        }
    }*/
    //*****************Ejercicio 12********************//
    function esPrimo($primo){
        $i = 2;
        while($i<$primo){
            if (($primo % $i)==0)
            return false;
            $i++;
        }
        return true;
    }