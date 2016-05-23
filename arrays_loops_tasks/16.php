<?php
$arr = array(1,2,3,4,5,6,7,8,9);
foreach ($arr as $int){
    if  ($int % 3 == 0){//} ($int == 3 or $int == 6){
        echo $int;
    }
    else {
        echo $int.'<br>';
    }
}

