<?php
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