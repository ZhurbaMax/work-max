<?php

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