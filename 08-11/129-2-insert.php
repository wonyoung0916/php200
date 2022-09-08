<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$oldlist = array();
$oldlist[0] = ['조원영','wycho@idevel.kr1'];
$oldlist[1] = ['조원영1','wycho@idevel.kr2'];
$oldlist[2] = ['조원영2','wycho@idevel.kr3'];
$oldlist[3] = ['조원영3','wycho@idevel.kr4'];
$oldlist[4] = ['조원영4','wycho@idevel.kr5'];
$oldlist[5] = ['조원영5','wycho@idevel.kr6'];

$newlist = array();
$newlist[0] = ['조원영','wycho@naver.kr1'];
$newlist[1] = ['조원영1','wycho@naver.kr2'];
$newlist[2] = ['조원영2','wycho@naver.kr3'];

$inputlist = array();
$inputlist['dropOutOld'] = $oldlist;
$inputlist['dropOutNew'] = $newlist;

$cnt = 0;

foreach ($inputlist as $key => $value){
    foreach ($value as $value2){
        $query = "INSERT INTO {$key}(name,email) VALUES ('{$value2[0]}','{$value2[1]}')";
        $result = $_mysqli->query($query);
        $cnt ++;

        if ($result){
            echo $cnt."데이터입력 성공";
        }
    }
}