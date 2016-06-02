<?php
$a=12;
$b=5;
$operator="/";
switch ($operator) {
    case"+":
        $result = $a + $b;
        echo $a . ' + ' . $b . ' = ' . $result;
        break;

    case"-":
        $result = $a - $b;
        echo $a . ' - ' . $b . ' = ' . $result;
        break;

    case"*":
        $result = $a * $b;
        echo $a . ' * ' . $b . ' = ' . $result;
        break;

    case"/":
        if ($b == 0) {
            echo "На ноль делить нельзя";
            break;
        }
        elseif ($a == 0) {
            echo "Ноль делить нельзя";
            break;
        }
        else

            $result = $a / $b;
            echo $a . ' / ' . $b . ' = ' . $result;
            break;

    case"%":
        if ($b == 0) {
            echo "На ноль делить нельзя";
            break;
        }
        elseif ($a == 0) {
            echo "Ноль делить нельзя";
            break;
        }
        else
        $result=$a%$b;
        echo $a.' % '.$b.' = '.$result;
        break;
}
?>