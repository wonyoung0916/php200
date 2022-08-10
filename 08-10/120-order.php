<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT name from mymember order by name DESC";
$result = $_mysqli->query($query);

$mem = $result->fetch_assoc();

foreach ($mem as $key => $value){
    echo $value['name'];
}