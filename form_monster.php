<?php
include ('class/Create.php');

if (isset($_POST['monster1']) && isset($_POST['monster2'])){
    $monst1 = $_POST['monster1'];
    $monst2 = $_POST['monster2'];
    $checkMonster = new Create();
    $checkMonster->formFight($monst1,$monst2);
    $startFight = new Create();
    echo $startFight->resultFight($monst1,$monst2);
    echo "</br>";
    echo "<h3><a href='/'> На главную </a></h3>";
}