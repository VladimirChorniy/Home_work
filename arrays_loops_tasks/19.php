<?php
$arr = array("понедельник","вторник","среда","Thursday","пятница","суббота","воскресенье");
$day = date('l');  //"понедельник";
foreach ($arr as $value){
    if ($value == $day){
        echo '<i>'.$day.'</i>'.'<br>';
    }
    else echo $value.'<br>';
}