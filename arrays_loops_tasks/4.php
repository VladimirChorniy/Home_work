<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

foreach ($arr as $key => $vol){
    echo 'ключ '. $key.'<br>';
}
foreach ($arr as $vol){
    echo 'значение '. $vol.'<br>';
}