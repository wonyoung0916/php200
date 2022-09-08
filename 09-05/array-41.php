<?php
    function sum($carry, $item){
        $carry += $item;
        return $carry;
    }

    function product($carry, $item){
        $carry *= $item;
        return $carry;
    }

    $a = array(1,2,3,4,5);
    $x = array();

    var_dump(array_reduce($a,"sum"));

    var_dump(array_reduce($a, "product",10));
    // int1200 , because : 10*1*2*3*4*5
    // 입력값도 같이 동작함

    var_dump(array_reduce($x,"sum","no data to reduce"));
    // 문자열의 개수만큼 반복된 17번의 .$caary 가 출력됨
