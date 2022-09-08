<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT name, email FROM dropoutold UNION ALL SELECT name, email FROM dropoutnew";
$result = $_mysqli->query($query);
foreach ($result as $value){
    echo "이름 : ".$value['name'];
    echo "<br>";
    echo "이메일 : ".$value['email'];
    echo "<hr>";
}