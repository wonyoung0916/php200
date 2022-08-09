<?php
    $host = "localhost";
    $user = "root";
    $pw   = "";
    $_mysqli = new mysqli($host,$user,$pw);
    $_mysqli->set_charset("utf8");

    if (mysqli_connect_errno()){
        echo "DB 접속실패";
        echo mysqli_connect_error();
    } else {
        echo "접속 성공";
    }