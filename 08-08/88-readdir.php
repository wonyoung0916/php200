<?php
    $folderName = '../php200/';

    // 디렉토리가 있는지 ?
    if (is_dir($folderName)){
        echo "폴더가 존재합니다";
        $opendir = opendir($folderName);
        if ($opendir){
            echo "폴더를 열었습니다.";
            while (($readdir = readdir($opendir))) {
                echo $readdir;
            }
            }else{
            echo "폴더를 열지 못했습ㄴ다.";
        }
    }else{
        echo "폴더가 존재 X";
    }