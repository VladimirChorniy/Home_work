<?php
for($is = 0; $is < 10; $is++) {
    $a[] = rand(1, 50);
}
print_r($a);
echo '<br>';
    $min = $a[0];
    $index_min = 0;
    $max = $a[0];
    $index_max = 0;

    for ($i = 1; $i < count($a); $i++) {
        if ($min > $a[$i]) {
            $min = $a[$i];
            $index_min = $i;
        }

        if ($max < $a[$i]) {
            $max = $a[$i];
            $index_max = $i;
        }
    }


echo 'Min: ' . $min . ', Max: ' . $max."<br>";

$a[$index_min] = $max;
$a[$index_max] = $min;
print_r($a);