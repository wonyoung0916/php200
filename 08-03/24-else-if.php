<?php
    $gender = "girl";
    $likeplace = 'studios';

    if ($gender == 'girl' && $likeplace == 'disney'){
        echo "소녀는 디즈니랜드를 좋아한다";
    }elseif ($gender == 'girl' && $likeplace =='studios'){
        echo "소녀는 스튜디오를 좋아한다";
    }else{
        echo "소녀는 둘다 싫어한당";
    }
