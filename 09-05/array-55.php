<?php
    $array1 = array('a' => 'grren', 'b'=>'brown', 'c'=>'blue','red');
    $array2 = array('a' => 'GREEN', 'B'=>'brown','yellow','red');

    print_r(array_intersect_uassoc($array1,$array2,'strcasecmp'));
