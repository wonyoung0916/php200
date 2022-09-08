<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "UPDATE mymember set phone = 0 where myMemberID = 6";
$result = $_mysqli->query($query);

if ($result){
    echo "업데이트완료";
}