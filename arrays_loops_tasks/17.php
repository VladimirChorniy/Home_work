<?php
$arr = array("январь","февраль","март","апрель","май","июнь","июль","август","сентябрь","октябрь","ноябрь","декабрь");
$month = "май";
foreach ($arr as $result) {
    if ($result == $month) {
         
        echo '<strong>' . $month . '</strong>' . '<br>';
    }

    else {
        echo  $result . '<br>';
    }
}