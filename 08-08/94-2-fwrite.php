<?php
    $content = '이 내용은 앞의 내용에 뒤에 붙어 저장됩니다.';
    $filename = 'HelloWorld.txt';
    // 파일열기의 옵션으로 입력
    $fp = fopen('./'.$filename,'a');
    $fw = fwrite($fp,$content);
    // 파일 쓰기 성공여부 확인
    if ($fw == false){
        echo "실패";
    } else{
        echo "성공";
    }
    fclose($fp);
