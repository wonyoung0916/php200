<?php
    class a{
        private function hello(){
            echo "helloworld";
        }
    }

    class b extends a{}

$b= new b();
    $b->hello();
