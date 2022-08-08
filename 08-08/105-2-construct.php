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
}
    $pen = new pen("파랑","두꺼운","2000원");




