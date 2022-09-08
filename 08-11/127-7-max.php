<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT MAX(english) as sum FROM schoolrecord";
$result = $_mysqli->query($query);
$db = $result->fetch_assoc();
if ($result){
    echo "가장높은 영어점수는".$db['sum'];
}