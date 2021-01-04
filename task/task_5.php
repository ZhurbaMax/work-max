<?php
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