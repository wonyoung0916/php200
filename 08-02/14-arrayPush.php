<?php
    $fruit = array();

    array_push($fruit,'apple','banana','grape','coconut','tangerine');

    foreach ($fruit as $key => $value) :
    echo $fruit[$key]."<br>";
    endforeach;