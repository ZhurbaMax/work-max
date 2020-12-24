<?php
require_once ("logic.php");

$monstersOne = 'boooD';
$monstersTwo = 'dirti_monster';
$monstersThree = 'zara_monster';
$monstersFor = 'zenda_monster';
echo '<h3>Первая функция </h3>';echo '</br>';
infoMonsters($monsters);
echo '</br>';
echo '<h3>Вторая функция </h3>';echo '</br>';
randMonsters($monsters);
echo '</br>';
echo '<h3>Третья функция </h3>';echo '</br>';
choiceMonsters($monsters, $monstersOne, $monstersTwo);