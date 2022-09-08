<?php
    function odd($var){
        return($var & 1);
        // 홀수
    }

    function even($var){
        // 짝수
        return(!($var & 1));
    }

    $array1 = array('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
    $array2 = array(5,6,7,8,9,10,11,12);

    echo "Odd :\n";
    print_r(array_filter($array1,"odd"));

    echo "Even:\n";
    print_r(array_filter($array2,"even"));