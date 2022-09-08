<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "UPDATE mymember SET phone = 010-1234-1234 where myMemberID = 6";
$result = $_mysqli->query($query);

if ($result){
    echo "완료";
    echo "<br>";
    $query = "SELECT * FROM mymember WHERE myMemberID = 6";
    $result = $_mysqli->query($query);
    $db = $result->fetch_assoc();
    echo $db['name'];
}else{
    echo "실패";
}