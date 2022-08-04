<?php
function sum($param1 = 50, $param2 = 100){
    $sum = $param1 + $param2;
    return $sum;
}

echo sum();
echo "<br>";
echo sum($param2 = 10);
echo "<br>";
echo sum(2,2);
echo "<br>";
