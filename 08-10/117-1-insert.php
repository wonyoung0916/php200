<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

    $query = "INSERT INTO mymember
              (userid, name, password, phone, email, birthDay, gender, created_at)
              VALUES 
              ('wycho','조원영','1234','010-5170-1758','wycho@idevel.kr','1994-09-16','m',NOW());
";
    $result = $_mysqli->query($query);
    if ($result){
        echo "생성완료";
    }
