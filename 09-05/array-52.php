<?php
    $array1 = array('a' => 'green', 'red', 'blue');
    $array2 = array('b' => 'green', 'blue', 'red');
    $result = array_intersect($array1, $array2);
    print_r($result);