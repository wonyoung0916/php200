<?php
    class operation{
        function plus($num1,$num2) : int{
            $result = $num1 + $num2;
            return $result;
        }
    }

    class load extends operation{}
    class load2 extends operation{}

    $load2 = new load2();
    $result = $load2->plus(10,20);
    echo $result;