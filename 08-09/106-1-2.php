<?php
    namespace agroup;

    class user{
        function loaduser(){
            return '첫번째';
        }
    }

    namespace bgroup;

    class user{
        function loaduser(){
            return '두번째';
        }
    }

    $auser = new \agroup\user();
    $buser = new \bgroup\user();

    echo $auser->loaduser();
    echo $buser->loaduser();