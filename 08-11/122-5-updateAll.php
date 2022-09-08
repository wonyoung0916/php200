<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "UPDATE mymember set phone = '010-1234-5678'";
$result = $_mysqli->query($query);

if ($result){
    echo "변경성공";
    $query = "SELECT * FROM mymember";
    $result = $_mysqli->query($query);

    foreach ($result as $value){
        echo $value['phone'];
    }

}else{
    echo "변경실패";
}

