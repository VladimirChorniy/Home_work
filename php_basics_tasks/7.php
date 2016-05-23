<?php
 $age=0;
if($age>=18 and $age<=59 ){
    echo "Вам еще работать и работать";
}
elseif($age>59){
    echo "Вам пора на пенсию";
}
elseif($age<18 and $age>=0){
    echo "Вам еще рано работать";
}
?>