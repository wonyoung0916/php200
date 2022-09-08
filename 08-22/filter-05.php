<?php
    $ip = "127.0.0.1";

    if (!filter_var($ip, FILTER_VALIDATE_IP)=== false){
        echo "ip는 유효한 ip주소입니다";
    }else{
        echo "유효하지x";
    }