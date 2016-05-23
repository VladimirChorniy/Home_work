<?php
$num = 0;
$n = 1000;
while ($n > 50){
    $num++;
    $n = $n / 2;
    echo $n. '<br>';
}
echo $num;