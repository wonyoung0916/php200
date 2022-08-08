<?php
    class a{
        function hello(){
            echo "hello";
        }
    }

    class b extends a{}

    $b = new b();

    $b->hello();
