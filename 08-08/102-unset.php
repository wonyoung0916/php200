<?php
    session_start();

// μΈμ μμ±
$_SESSION['userid'] = 'idevel';

echo $_SESSION['userid'];

unset($_SESSION['userid']);

echo $_SESSION['userid'];