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
use \agroup\user as a;
use \bgroup\user as b;

$auser = new a;
$buser = new b;

echo $auser->loaduser();
echo $buser->loaduser();