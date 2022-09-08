<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT myMemberID, name FROM mymember WHERE myMemberID IN (1,2,3)";
$result = $_mysqli->query($query);

if ($result){
    foreach ($result as $value){
        echo $value['myMemberID'];
        echo "<br>";
        echo $value['name'];
    }
}
