<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT *, (SELECT avg(english) FROM schoolrecord) as enlishAVG FROM schoolrecord";
$result = $_mysqli->query($query);
$db = $result->fetch_assoc();

echo $db['myMemberID'];


