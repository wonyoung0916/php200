<?php
    rmdir('hello');

    if (is_dir('hello')){
        echo "폴더가 존재";
    }else{
        echo "폴더가 존재x";
    }
