<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

    $query = "SELECT name, userid from mymember";
    $result = $_mysqli->query($query);

    $testarr = $result->fetch_all();
    echo "<pre>";
    var_dump($testarr);
    echo "<pre>";
    foreach ($testarr as $value) :
        echo $value[0];
    endforeach;