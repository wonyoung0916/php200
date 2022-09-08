<?php
    $country = array('korea','usa','japan','china','frach','canada');

    $keys = array_rand($country, 2);
    echo $country[$keys[0]];
    echo $country[$keys[1]];
