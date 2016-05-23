<?php
$arr = array("понедельник","вторник","среда","четверг","пятница","суббота","воскресенье");
$day = "понедельник";
foreach ($arr as $value){
    if ($value == $day){
        echo '<i>'.$day.'</i>'.'<br>';
    }
    else echo $value.'<br>';
}