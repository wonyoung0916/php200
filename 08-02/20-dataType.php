<?php
    $num = 12;
    echo gettype($num)."<br>";

    $test = "테스트";
    echo gettype($test)."<br>";

    $test = '텍스트';
    echo gettype($test)."<br>";

    $test = "121212";
    echo gettype($test)."<br>";

    echo gettype(array());

    echo gettype(null);
    echo gettype(true);