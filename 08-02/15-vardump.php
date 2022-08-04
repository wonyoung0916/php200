<?php
//배열선언
$dr = array();
//배열dr에 continent인덱스 생성하고 한번더 배열 선언
$dr['continent'] = array();

// 배열에 배열 선언
$dr['continent']['america'] = array();
$dr['continent']['america'][0] = '애너하임';
$dr['continent']['america'][1] = '올랜도';

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = '서울';
$dr['continent']['asia'][1] = '부산';
$dr['continent']['asia'][2] = '남양주';

$dr['continent']['europe'] = array();
$dr['continent']['europe'][0] = '파리';

echo "<pre>";
var_dump($dr);
echo "<pre>";
