<?php
    $num = 0;
    $maxValue = 50;
    for($i = 0; $i <= $maxValue; $i++){
        if($i % 2 == 0){
            $num += $i;
        }
    }
    // 1부터 50까지 짝수합
    echo $num;

