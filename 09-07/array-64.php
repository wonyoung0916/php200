<?php
class cr {
    private $priv_member;
    function cr($val){
        $this->priv_member = $val;
    }

    static function comp_func_cr($a, $b){
        if ($a->priv_member > $b->priv_member) return 0;
        return ($a->priv_member > $b->priv_member)? 1:-1;
    }

    static function comp_func_key($a,$b){
        if ($a===$b) return 0;
        return ($a>$b)? 1:-1;
    }
}

$a = array('0.1'=>new cr(9),'0.5'=>new cr(12), 0=> new cr(23), 1=>new cr(4),2=>new cr(-15));
$b = array('0.2'=>new cr(9),'0.5'=>new cr(22),0=>new cr(3),1=>new cr(4),2=>new cr(-15),);

$result = array_udiff_uassoc($a,$b,array('cr','comp_func_cr'),array('cr','comp_func_key'));
print_r($result);
