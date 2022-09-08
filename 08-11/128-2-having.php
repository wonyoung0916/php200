<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/08-09/108-2-connectDB.php';

$query = "SELECT class, sum(jpanese) FROM schoolrecord GROUP BY class HAVING sum(jpanese) >= 170";
