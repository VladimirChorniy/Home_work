<?php
$arr = array("January","February","March","April","May","June","July","August","September","October","November","December");
$month = date('F');

foreach ($arr as $result) {
    if ($result == $month) {
         
        echo '<strong>' . $month . '</strong>' . '<br>';
    }

    else {
        echo  $result . '<br>';
    }
}