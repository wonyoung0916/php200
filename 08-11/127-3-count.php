<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

function schoolRecord(){
    global $_mysqli;
    $query = "SELECT count(class)as cnt FROM schoolrecord";
    $result = $_mysqli->query($query);
    foreach ($result as $value){
        echo $value['cnt'];
    }
}

schoolRecord();
$query = "UPDATE schoolrecord SET class = NULL WHERE schoolRecordID = 1";
$result = $_mysqli->query($query);
schoolRecord();