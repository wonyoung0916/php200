<?php
    $filename = 'HelloWorld.txt';
    // 파일 존재여부
    if (file_exists($filename)){
        // 파일열기
        $fopen = fopen($filename,'r');
        if ($fopen){
            // 파일읽기
            $fread = fread($fopen, filesize($filename));
            if ($fread){
                echo $fread; // 내용출력
                fclose($filename); // 파일닫기
            }else{
                echo "파일읽기실패";
            }
        }else{
         echo "파일열기실패";
        }
    }else{
        echo "파일존재x";
    }
