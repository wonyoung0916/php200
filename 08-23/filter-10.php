<?php
    $str = "<H1>Hello World</H1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $str;
