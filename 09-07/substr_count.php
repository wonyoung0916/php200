<?php
    $text = 'This is a test';
    echo $text."<br>";

    echo "원본 문자열 길이=".strlen($text)."<br>";

    echo "needle substring이 발생하는 횟수=".substr_count($text,'is')."<br>";

    echo "오프셋 적용 =".substr_count($text,'is',3)."<br>";

    echo "오프셋적용, 길이제한 = ".substr_count($text,'is',3,3)."<br>";

    echo substr_count($text,'is','5','10');

    $text2 = 'gcdgcdgcd';
    echo substr_count($text2,'gcdgcd').'<br>';