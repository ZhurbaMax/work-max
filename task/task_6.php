<?php
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