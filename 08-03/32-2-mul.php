<?php
    for($i = 2; $i <=3; $i++){
        echo "{$i}단<br>";
        for($j = 1; $j <= 9; $j++){
            $mul = $i * $j;
            echo "{$i}X{$j} = {$mul}<br>";
        }
    }
