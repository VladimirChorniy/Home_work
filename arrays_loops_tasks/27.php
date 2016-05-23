<?php
$row = 5;
$cols = 5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo '<table>';

for ($tr=1; $tr<=$row; $tr++){

    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $res = array_rand ($colors);
        $c = $colors[$res];
        echo '<td style="background-color:'.$c.';">'.mt_rand(111,99999).'</td>';
           //'<td style="background-color:'.$c;.'">'.mt_rand(111,99999).</td>';
    }
    echo '</tr>';
}

echo '</table>';
