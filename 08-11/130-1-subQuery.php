<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT 
            *  
            FROM schoolrecord
            WHERE (SELECT MAX(english) FROM schoolrecord);
";
$result = $_mysqli->query($query);
$db = $result->fetch_assoc();

