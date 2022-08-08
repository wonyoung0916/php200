<?php
    session_start();

    // 2개 세션생성
    $_SESSION['a']  = 'a';
    $_SESSION['b']  = 'b';
    $_SESSION['c']  = 'c';

    echo "<pre>";
    var_dump($_SESSION);
    echo "<pre>";

    session_destroy();

echo "<pre>";
var_dump($_SESSION);
echo "<pre>";