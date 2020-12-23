<?php
echo '<h2>Задание 1 </h2>';
echo 'Hello word';
echo '</br>';echo '</br>';echo '</br>';
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
echo '<h2>Задание 3 </h2>';
$string = 'asdasd1sad17rycb3428btrb3425r';
summ($string);
echo '</br>';echo '</br>';echo '</br>';
function strings($param1){
    preg_match_all('/\d+/', $param1, $matches);
    foreach ($matches as $st ){
        foreach ($st as $st2){
            echo $st2;
        }
        echo '</br>';
    }
    preg_match_all('/[a-z]/', $param1, $matches2);
    foreach ($matches2 as $st ){
        foreach ($st as $st2){
            echo $st2;
        }
        echo '</br>';
    }
}
$string1 = 'asdasd1sad17rycb3428btrb3425r';
strings($string1);
echo '</br>';echo '</br>';echo '</br>';
echo '<h2>Задание 4 </h2>';

$m = [    [ 1, 3, 15],
             [ 2, 60, 25],
             [ 3, 18, 7],
             [ 4, 5, 6],
             [ 5, 5, 5],
];
$newMatrix = array();

function rotateMatrix($m, $i, &$newMatrix)
{
    foreach ($m as $chunk) {
        $newChunk[] = $chunk[$i];
        echo $chunk[$i];
        echo ' | ';
    }
    echo '</br>';
    $newMatrix[] = $newChunk;
    $i++;
    if ($i < count($chunk)) {
        rotateMatrix($m, $i, $newMatrix);
    }
}
rotateMatrix($m, 0, $newMatrix);

echo '</br>';echo '</br>';echo '</br>';
echo '<h2>Задание 5 </h2>';

$number = rand(1, 50);
echo 'Рандомное число : ' . $number;
echo"<br>";
for($i=1; $i<=$number; $i++){
    for($j=1; $j<=$i; $j++){
        echo "+";
    }
    echo"<br>";
}
echo"<br>";
for($i=$number; $i>=1; $i--){
    for($j=$i; $j>=1; $j--){
        echo "+";
    }
    echo"<br>";
}
echo '</br>';echo '</br>';echo '</br>';
echo '<h2>Задание 6 </h2>';
function triangle($num1, $num2, $num3){
    if ($num1>0 && $num2>0 && $num3>0){
        echo 'Нарисовать треугольник МОЖНО !';
        return true;
    } else{
        echo 'Нарисовать треугольник НЕЛЬЗЯ !';
        return false;
    }
}
function triangleCheck($n1, $n2, $n3){
    if ($n1>0 && $n2>0 && $n3>0){
        return true;
    } else{
        return false;
    }
}
function checkTriangle($num1, $num2, $num3){
     if($num1==$num2 && $num2==$num3 ){
         echo 'Треугольник равносторонний';
     }elseif ($num1==$num2 || $num2==$num3 || $num1==$num3 ){
         echo 'Треугольник равнобедренный';
     }else{
         echo 'Треугольник разносторонний';
     }
}
function squareTriangle($num1, $num2, $num3){
    $check = triangleCheck($num1, $num2, $num3);
    if($check == true){
        $p = $num1 + $num2 + $num3;
        $s = sqrt($p*($p-$num1)*($p-$num2)*($p-$num2));
        echo 'Площадь треугольника по трем сторонам равна: ' . $s;
    }else{
        echo 'вычислить площадь НЕЛЬЗЯ !';
      }
}
$number1 = 11;
$number2 = 333;
$number3 = 44;
echo $number1;echo '</br>';
echo $number2;echo '</br>';
echo $number3;echo '</br>';
triangle($number1, $number2, $number3);
echo '</br>';
checkTriangle($number1, $number2, $number3);
echo '</br>';
squareTriangle($number1, $number2, $number3);

echo '</br>';echo '</br>';echo '</br>';
echo '<h2>Задание 7 </h2>';
