<?php
    function fibonacci($n)
    {
        if ($n <= 1 && $n >= 0) return $n;
        else {
            $ant = 0;
            $res = 1;
            for ($i = 1; $i < $n; $i++) {
                $res += $ant;
                $ant = $res;
            }

        }return $res;
    }
    function fibonacci2($n){
        if ($n<=0) return 0;
        elseif($n==1) return $n;
        else{
            return fibonacci2($n-1)+fibonacci2($n-2);
        }
    }
?>