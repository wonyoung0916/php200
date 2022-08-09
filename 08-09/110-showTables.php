<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/php200/08-09/108-2-connectDB.php';

    $query = "show tables";
    $result = $_mysqli->query($query);
    $arr = $result ->fetch_assoc();
    foreach ($arr as $value) :
        echo $value;
        endforeach;
