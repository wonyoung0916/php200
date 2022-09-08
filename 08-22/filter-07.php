<?php
    $url = "http://www.hojin.io";

    if (!filter_var($url,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED) === false){
        echo "유효한 url";
    }else{
        echo "유효하지 않은 url";
    }
