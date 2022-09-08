<?php
    $arr = array('FirSt' => 1, 'SecOnd' => 4);

    // 대문자
    $upper = array_change_key_case($arr, CASE_UPPER);
    // 소문자
    $lower = array_change_key_case($arr, CASE_LOWER);
