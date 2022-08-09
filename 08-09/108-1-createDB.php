<?php
    include '107-connectDB.php';

    $query = "CREATE DATABASE php200Example";
    $result = $_mysqli->query($query);
    if ($result){
        echo "생성";
    }