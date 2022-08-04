<?php
    $val = "true";
    echo "변수 val의 데이터형".gettype($val);

    settype($val,'int');
    gettype($val);
    var_dump($val);
