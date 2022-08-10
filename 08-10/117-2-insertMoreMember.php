<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$member = array();
$member[0] = "('wycho','조원영','1234','010-5170-1758','wycho@idevel.kr','1994-09-16','m',NOW())";
$member[1] = "('wycho','성미희','1234','010-5170-1758','wycho@idevel.kr','1994-09-16','m',NOW())";
$member[2] = "('wycho','김상용','1234','010-5170-1758','wycho@idevel.kr','1994-09-16','m',NOW())";


$q = "INSERT INTO mymember
              (userid, name, password, phone, email, birthDay, gender, created_at)
              VALUES 
";

foreach ($member as $m) :
    $query = $q.$m;
$result = $_mysqli->query($query);
if ($result){
    echo "생성완료";
}
endforeach;
