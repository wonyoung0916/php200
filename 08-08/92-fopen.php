<?php
    $fopen = fopen('php200/hello.php','r+');
    if ($fopen){
        echo "파일을 열었슴다";
    }else{
        echo "파일을 여는데 실패했슴다";
    }
