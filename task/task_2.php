<?php
echo '<h2>Задание 2 </h2>';
$count = 'Hello word 333 33';
echo "</br>";
echo 'количество символов в строке :' . strlen ($count);
echo "</br>";
$comparison = strlen ($count);
if($comparison%2 == 0){
    echo "the string has an even number of characters";
}  else {
    echo "the string does not have an even number of characters";
}
echo '</br>';

if(ctype_space($count) == false){
    $string = explode(' ', $count);
    foreach ($string as $str){
        echo $str;
        echo '</br>';
    }
}else {
    echo "нет пробелов";
}
$string2 = 'asdasd1sad17rycb3428btrb3425r';
$string2 = trim($string2);
$string2 = preg_replace("/[^0-9]/", '', $string2);

$string = 'asdasd1sad17rycb3428btrb3425r';
preg_match_all('/\d+/', $string, $matches);
foreach ($matches as $str2 ){
    foreach ($str2 as $str3){
        echo $str3;
        echo '</br>';
    }
    $sum = array_sum($str2);
    echo 'сумма чисел : ' . $sum;
}
echo '</br>';

function summ($param)
{
    preg_match_all('/\d+/', $param, $matches);
    foreach ($matches as $str2 ){
        $sum = array_sum($str2);
        foreach ($str2 as $str3){
            $multiplication = $str3 * $sum ;
            echo $multiplication;
            if($multiplication%2 == 0){
                echo " Четное";
            }  else {
                echo " Не четное";
            }
            echo '</br>';
        }
    }
}
echo '</br>';echo '</br>';echo '</br>';