<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT name, userid FROM mymember";
$result = $_mysqli->query($query);
$datacount = $result->num_rows;

for ($i = 0; $i < $datacount; $i++){
    $memarr = $result->fetch_array(MYSQLI_NUM);
    echo "이름".$memarr[0];
    echo "<br>";
    echo "아이디".$memarr[1];
    echo "<hr>";
}
$memarr = $result ->fetch_assoc();
var_dump($memarr);
foreach ($memarr as $value) :


endforeach;
