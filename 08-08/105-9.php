<?php
    class a{
        protected function hello(){
            echo "hello";
        }

        public function print(){
            $this->hello();
        }
    }

    $a = new a();
    $a->print();
