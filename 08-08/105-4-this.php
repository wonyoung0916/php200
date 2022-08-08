<?php
class pen
{
    public $color='파랑';
    public $bold;
    public $price;

    function __construct($color)
    {
        echo $color; // 노랑 ㅋㅋ
        echo $this->color; // 파랑
        $this->color=$color;
    }
}
$pen = new pen('노랑ㅋㅋ');





