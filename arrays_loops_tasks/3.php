<?php
$result=0;
$a=array(26, 17, 136, 12, 79, 15);
foreach ($a as $b){

   $c = $b*$b;
    echo $b.' в квадрате '.$c.'<br>';

    $result = $c+$result;
}
echo 'Сумма в квадрате '. $result;