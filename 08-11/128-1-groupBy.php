<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "UPDATE schoolrecord SET class = 1 WHERE schoolRecordID = 1";
$_mysqli->query($query);

$query = "SELECT class, avg(english) as avgeng FROM schoolrecord GROUP BY class";
$result = $_mysqli->query($query);

foreach ($result as $value){
    echo "반: ".$value['class'];
    echo "<br>";
    echo "평균영어점수 : ".$value['avgeng'];
    echo "<hr>";
}