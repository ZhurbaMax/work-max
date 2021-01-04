<?php

$choiceMonster = new Create();
$monster = $choiceMonster->choiceMonster();

?>
<!DOCTYPE HTML>

<html>

<head>
    <title>Задание 9</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

<h2 class="h2">Задание 9 </h2>
<div class="content">
<h4 class="h4">Создайте Монстра</h4>
<form method="post" action="../form.php">
    <p>Имя монстра: <input type="text" name="name" /></p>
    <p>Высота монстра: <input type="text" name="height" /></p>
    <p>Вес монстра: <input type="text" name="weight" /></p>
    <p>Сила монстра: <input type="text" name="strength" /></p>
    <p><input type="submit" /></p>
</form>
<div class="cont-two">
    <div class="cont">
        <h4 class="h4">Выберите Монстров для сражения</h4>
        <form method="post" action="../form_monster.php">
            <select name="monster1">
                <? foreach ($monster as $item): ?>
                    <option value="<?=$item?>"><?=$item?></option>
                <? endforeach; ?>
            </select>
            <select name="monster2">
                <? foreach ($monster as $item): ?>
                    <option value="<?=$item?>"><?=$item?></option>
                <? endforeach; ?>
            </select>
            <input type="submit" value="Выбрать">
        </form>
    </div>
</div>
    <div class="cont-two">
        <div class="cont">

        </div>
    </div>
</div>
</body>
</html>

