<?php

    $gender = 'woman';
    $like = 'banana';

    if($gender == 'man'){
        echo "only woman";
    }else switch ($like){
        case 'banana':
            echo "바나나를 좋아한다";
            break;
        case 'podo':
            echo "포도를 좋아한당";
            break;
        default :
            echo "암것도 안좋아한당";
    }