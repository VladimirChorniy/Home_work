<?php
$a1 = 0;
$a2 = 0;
$a3 = 0;
$arr = array(2,4,5,19,13,0,10);
foreach ($arr as $a) {
    if ($a == 2) {
        $a1 = 1;
        echo 'Значение 2 есть';
    }
    if ($a == 3) {
        $a2 = 1;
        echo 'Значение 3 есть';
    }

    if ($a == 4) {
        $a3 = 1;
        echo 'Значение 4 есть';
    }
}
if ($a1 == 0){
    echo 'Значения 2 нет';
}
if ($a2 == 0){
    echo 'Значения 3 нет';
}
if ($a3 == 0){
    echo 'Значения 4 нет';
}