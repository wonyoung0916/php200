<?php
    $input = array(12, 10, 9);

    $result = array_pad($input, 5, 0);
    print_r($result);
    echo "<br>";

    $result = array_pad($input, -7, -1);
    print_r($result);