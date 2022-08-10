<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT name, userid FROM mymember where myMemberID = '3'";
$result = $_mysqli->query($query);

$value = $result->fetch_assoc();
echo "이름".$value['name'];
echo "<br>";
echo "아이디".$value['userid'];
