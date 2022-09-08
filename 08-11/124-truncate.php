<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "TRUNCATE mymember";
$result = $_mysqli->query($query);
if ($result){
    echo "초기화성공";
}else{
    echo "초기화실패";
}