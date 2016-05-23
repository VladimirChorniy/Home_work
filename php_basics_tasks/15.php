<?php
$a=5;
$b=12;
$operator="*";
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
        else

            $result = $a / $b;
            echo $a . ' / ' . $b . ' = ' . $result;
            break;

    case"%":
        $result=$a%$b;
        echo $a.' % '.$b.' = '.$result;
        break;
}
?>