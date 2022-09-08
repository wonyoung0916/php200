<?php
    $base = array('orange','banana','apple','raspberry');
    $replacements = array(0=>'pineapple',3=>'cheery');
    $basket = array_replace($base, $replacements);
    print_r($basket);
