<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT
       p.regTime, m.name, p.content 
FROM mymember m
    join prodreview p 
        on p.prodReviewID = m.myMemberID";

$result = $_mysqli->query($query);

foreach ($result as $value){
    echo $value['regTime'].'-'.$value['name'].'님'.','.$value['content']."<br>";
}