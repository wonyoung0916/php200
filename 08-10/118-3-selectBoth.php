<?php

    include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';
    $query = "SELECT name, userid from mymember";
    $result = $_mysqli->query($query);
