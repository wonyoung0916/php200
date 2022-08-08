<?php
    // 파일에 쓸 내용
    $content = 'HelloWorld!';

    // 내용을 저장할 파일명
    $filename = 'HelloWorld.txt';

    // 파일 열기
    $fp = fopen($filename,'w');

    // 파일 쓰기
    $fw = fwrite($fp, $content);

    // 파일쓰기 성공여부 확인
    if ($fw == false){
        echo "파일쓰기에 실패";
    }else{
        echo "파일쓰깅 완료";
    }

    fclose($fp);
