<?php
    $folderName = 'D:\data\source\php200\php200/08-08';
    $opendir = opendir($folderName);
    if ($opendir){
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';

        rewinddir($opendir);
        echo "<br>rewinddir() 함수 실행 후<br>";

        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
        echo readdir($opendir).'<br>';
    }
