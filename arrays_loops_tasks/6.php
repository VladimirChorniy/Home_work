<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $vol){
    $en[] = $key;
    $ru[] = $vol;
}
print_r($en);
print_r($ru);