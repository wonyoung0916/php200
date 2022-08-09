<?php
    $_mysqli = new mysqli('localhost','root','','php200Example');
    $_mysqli->set_charset('utf8');

    if (mysqli_connect_error()){
        echo "DB연결실패";
    }
