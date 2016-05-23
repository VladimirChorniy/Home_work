<?php
$n = 1825;
$s = 0;

while ($n > 0) {
    $r = $n % 10;
    $s = $r + $s;
    $n = (int)$n/10;
}

echo $s;