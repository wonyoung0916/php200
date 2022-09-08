<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT count(*) FROM schoolrecord";
$result = $_mysqli->query($query);
foreach ($result as $value){
    echo "레코드수".$value['count(*)'];
}