<?php
    $int = 0;

if (!filter_var($int, FILTER_VALIDATE_INT) === false || filter_var($int, FILTER_VALIDATE_INT) === 0){
    echo "맞다";
}else {
    echo "아니다";
}
