<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$reviewList = array();
$reviewList[0] = [1, '초보자에게 좋아요'];
$reviewList[1] = [2, '깊이감이 아쉬워요'];
$reviewList[2] = [3, '좋아요'];
$reviewList[3] = [4, '참친절한 입문서입니다'];

foreach ($reviewList as $value){
    $query = "insert into prodreview (myMemberID, content, regTime) VALUES ('{$value[0]}','{$value[1]}',now())";
    $result = $_mysqli->query($query);
    if ($result){

    }else{
        echo "내용입력중 오류발생";
    }
}