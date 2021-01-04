<?php
include ('class/Create.php');
if (!empty($_POST['name']) && !empty($_POST['height']) && !empty($_POST['weight']) && !empty($_POST['strength'])){
    $name = $_POST['name'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $strength = $_POST['strength'];

    $saveMonster = new Create();
    $saveMonster->saveMonster($name,$height,$weight,$strength);

    echo "</br>";
    echo "<h2> Вы успешно добавили монстра </h2>";
    echo "</br>";
    echo "<a href='/'> на главную </a>";

} else{
    echo "</br>";
    echo "<h2> Заполните все поля формы </h2>";
    echo "</br>";
    echo "<a href='/'> Заполнить форму </a>";
}



