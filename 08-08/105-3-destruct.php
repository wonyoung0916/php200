<?php
class pen
{
    public $color;
    public $bold;
    public $price;

    function __construct($color, $bold, $price)
    {
        echo $color;
        echo $bold;
        echo $price;
    }

    public function write($contents){
        echo "{$contents}을 쓰다";
    }

    public function __destruct(){
        echo "객체사용끝남";
    }
}
$pen = new pen("파랑","두꺼운","2000원");
echo "helloworld";
$pen->write("zzzz");



