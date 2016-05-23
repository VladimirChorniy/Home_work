<?php
$result=0;
$a=array(1, 20, 15, 17, 24, 35);
foreach ($a as $b){
    echo $b.'<br>';
    $result += $b; //$result = $b+$result;
}
echo 'Всего'. $result;