<?php
require_once ("animals.php");

function infoMonsters($mon){
    foreach ($mon as $monster => $value){
        echo $monster . ' : ';
        foreach ($value as $key => $val){
            echo $key . ' : ' . $val . ' ; ';
        }
        echo '</br>';
    }
}
function comparison($sumOne, $sumTwo, $monst1, $monst2){
    if($sumOne > $sumTwo){
        echo 'Победил : ' . $monst1;
    }elseif ($sumOne < $sumTwo){
        echo 'Победил : ' . $monst2;
    }elseif ($sumOne == $sumTwo){
        $sumM1Dop = rand(1, 10);
        $sumM2Dop = rand(1, 10);
        echo $monst1 . ' = ';
        echo $sumM1Dop;echo '</br>';
        echo $monst2 . ' = ';
        echo $sumM2Dop;echo '</br>';
        comparison($sumM1Dop, $sumM2Dop, $monst1, $monst2);
    }
}

function randMonsters($monstr){
    $rand_keys = array_rand($monstr, 2);
    echo 'Сражается : ';
    echo $monster1 = $rand_keys[0];
    echo ' против ';
    echo $monster2 = $rand_keys[1];
    echo '</br>';
    $m1 = $monstr[$monster1];
    $m2 = $monstr[$monster2];
    $sumM1 = ($m1['force']*2)+$m1['weight']+$m1['growth'];
    $sumM2 = ($m2['force']*2)+$m2['weight']+$m2['growth'];
    echo $monster1 . ' = ';
    echo $sumM1;echo '</br>';
    echo $monster2 . ' = ';
    echo $sumM2;echo '</br>';
    comparison($sumM1, $sumM2,$monster1, $monster2);
}
function choiceMonsters($monstr, $mOne, $mTwo){
    echo 'Сражается : ';
    echo $monster1 = $mOne;
    echo ' против ';
    echo $monster2 = $mTwo;
    echo '</br>';
    $m1 = $monstr[$monster1];
    $m2 = $monstr[$monster2];
    $sumM1 = ($m1['force']*2)+$m1['weight']+$m1['growth'];
    $sumM2 = ($m2['force']*2)+$m2['weight']+$m2['growth'];
    echo $monster1 . ' = ';
    echo $sumM1;echo '</br>';
    echo $monster2 . ' = ';
    echo $sumM2;echo '</br>';
    comparison($sumM1, $sumM2,$monster1, $monster2);
}