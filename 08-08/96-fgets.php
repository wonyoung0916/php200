<?php
    $filename = 'HelloWorld.txt';
    if (file_exists($filename)){
        $fopen = fopen($filename,'r');

        // 읽어올 용량 설정 상황에 따라 다른값 넣어야함
        $readByte = 512;
        if($fopen){
            while (($fgets = fgets($fopen, $readByte))){
                echo $fgets."<br>";
            }
        }
    }
