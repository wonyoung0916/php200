<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';
$query = "DELETE FROM mymember where myMemberID = 3";
$result = $_mysqli->query($query);

if ($result){
    echo "삭제완료";
    $query = "SELECT * FROM mymember";
    $result = $_mysqli->query($query);
    foreach ($result as $value){
        echo $value['name'];
    }
} else{
    echo "삭제실패";
}