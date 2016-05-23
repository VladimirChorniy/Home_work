<?php
$arr = array("понедельник","вторник","среда","четверг","пятница","суббота","воскресенье");
foreach ($arr as $key => $result) {
    if ($key > 4){//} == "суббота" or $result == "воскресенье") {
        echo '<strong>' . $result . '</strong>' . '<br>';
    } else {
        echo $result . '<br>';
    }
}