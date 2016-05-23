<?php
$arr = array(1,2,3,4,5,6,7,8,9);
foreach ($arr as $int){
    echo $int;
}
echo '<br>';
$a=0;
while ($a < count($arr)){
    echo $arr[$a];
    $a++;
}
echo '<br>';
for ($b=0;$b < count($arr);$b++){
    echo $arr[$b];
}