<?php
    $int = 100;

    if (!filter_var($int, FILTER_VALIDATE_INT) === false){
        echo "정수가 맞다";
    }else{
        echo "정수가 아니다";
    }
