<?php
    $nowTime = getdate();
    echo "현재 년도 : ".$nowTime['year']."<br>";
echo "현재월 : ".$nowTime['mon']."<br>";
echo "현재일 : ".$nowTime['mday']."<br>";
echo "현재시: ".$nowTime['hours']."<br>";
echo "현재분 : ".$nowTime['minutes']."<br>";
echo "현재초 : ".$nowTime['seconds']."<br>";
echo "현재요일 숫자 : ".$nowTime['wday']."<br>";
echo "현재 요일 문자 : ".$nowTime['weekday']."<br>";
echo "현재 현재월 문자 : ".$nowTime['month']."<br>";
echo "현재시간 타임스탬프 : ".$nowTime[0]."<br>";
echo "올해의 일차 : ".$nowTime['yday']."<br>";

