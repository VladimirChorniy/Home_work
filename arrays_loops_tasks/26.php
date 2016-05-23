<?php
for ($a = 0;$a < 100;$a++){
    $arr[] = rand(1,10);
}
print_r($arr);

$mult = 1;
foreach ($arr as $key => $val){
    if ($key % 2 == 0){
        $mult = $mult * $val;
            }
   }
echo $mult.'<br>';
foreach ($arr as $key => $val){
    if ($key % 2 > 0){
        echo $val.' ';
    }
}








