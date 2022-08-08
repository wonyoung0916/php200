<?php
    class pen{
        public $color;
        public $bold;
        public $price;

        public function write($content){
            echo "$content.을쓰다";
        }

        public function draw($contents){
            echo "{$contents}.을그리다";
        }
    }

    $pen = new pen();
    $pen->draw("zz");
