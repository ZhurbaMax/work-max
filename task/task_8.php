<?php

echo '<h2>Задание 8 </h2>';

echo '<h4>Монстр </h4>';

$namesRand = new Animals();
$namesRand->getName('boooD');
$namesRand->getName();

echo '<h4>Арены </h4>';
$arenaRand = new Arena();
$arenaRand->getArena('OneArena');
$arenaRand->getArena();
echo '</br>';
$elementFight = new Fighting();
$animals=['zenda_monster','zara_monster'];
$arens = 'OneArena';
echo $animals[0] . ' -- Против -- ' . $animals[1];echo '</br>';
$startFight = new Fighting();
$ddd = $startFight->startFight($animals,$arens);
echo $ddd;


