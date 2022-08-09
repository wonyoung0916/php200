<?php
    namespace agroup;

    function loaduser(){
        return '첫번째함수';
    }

    namespace bgroup;

    function loaduser(){
        return ' 두번째함수';
    }

    echo \agroup\loaduser();
    echo \bgroup\loaduser();
