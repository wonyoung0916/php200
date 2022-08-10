<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT name From mymember order by name desc limit 3";
$result = $_mysqli->query($query);

$resultarray = $result->fetch_all(MYSQLI_ASSOC);

foreach ($resultarray as $value):
    echo $value['name'];

endforeach;