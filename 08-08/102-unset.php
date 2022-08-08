<?php
    session_start();

// 세션 생성
$_SESSION['userid'] = 'idevel';

echo $_SESSION['userid'];

unset($_SESSION['userid']);

echo $_SESSION['userid'];