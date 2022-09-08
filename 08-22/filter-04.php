<?php
    $int = 122;
    $min = 1;
    $max = 200;

    $range = array(
        "options" => array(
            "min_range" => $min, "max_range"=>$max
        )
    );

    if (filter_var($int,FILTER_VALIDATE_INT,$range)){
        echo "유효 범위 입니다";
    }else{
        echo "유효범위 밖입니다";
    }
