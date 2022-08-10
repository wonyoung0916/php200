<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT name, userid FROM mymember WHERE userid like 'w%'";
$result = $_mysqli->query($query);

$resarr =array();
$resarr = $result->fetch_assoc();

var_dump($resarr);

foreach ($resarr as $value) :
    if (is_array($resarr)){
    echo $value['userid'];
    }
endforeach;
