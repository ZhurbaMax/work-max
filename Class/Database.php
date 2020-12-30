<?php


class Fighting
{
    public $hasName1;
    public $hasName2;
    public $themArena;

    public function basicFight($monster1,$monster2)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');
        $this->hasName1 = $monster1;
        $a1 = $this->hasName1;
        $sql = "SELECT * FROM animals WHERE name = :a1";
        $result = $pdo->prepare($sql);
        $result->bindParam(':a1',$a1,PDO::PARAM_STR, 30);
        $result->execute();
        $a = $result->fetchAll();

        $this->hasName2 = $monster2;
        $a2 = $this->hasName2;
        $sql2 = "SELECT * FROM animals WHERE name = :a2";
        $result2 = $pdo->prepare($sql2);
        $result2->bindParam(':a2',$a2,PDO::PARAM_STR, 30);
        $result2->execute();
        $b = $result2->fetchAll();
        $height=[];
        $weight=[];
        $strength=[];
        $name=[];
        $height2=[];
        $weight2=[];
        $strength2=[];
        $name2=[];
        foreach ($a as $item=>$value){
            $height[] = $value['height'];
            $weight[] = $value['weight'];
            $strength[] = $value['strength'];
            $name[] = $value['name'];
        }
        $sum1 = ($strength[0]*2)+$height[0]+$weight[0];
        foreach ($b as $item2=>$value2){
            $height2[] = $value2['height'];
            $weight2[] = $value2['weight'];
            $strength2[] = $value2['strength'];
            $name2[] = $value2['name'];
        };
        $sum2 = ($strength2[0]*2)+$height2[0]+$weight2[0];
        //echo 'Первый монстр : ' . $monster1 . ' - Сумма балов: ' . $sum1;echo '</br>';
        //echo 'Второй монстр : ' . $monster2 . ' - Сумма балов: ' . $sum2;echo '</br>';

        $compar = new Fighting();
        $ret2 = $compar->comparison($sum1,$sum2,$monster1,$monster2);
        return $ret2;
    }

    public function comparison($sumOne, $sumTwo, $monst1, $monst2){
        if($sumOne > $sumTwo){
            return $monst1;
        }elseif ($sumOne < $sumTwo){
            return $monst2;
        }elseif ($sumOne == $sumTwo){
            $sumM1Dop = rand(1, 10);
            $sumM2Dop = rand(1, 10);
            //echo $monst1 . ' = ';
            //echo $sumM1Dop;echo '</br>';
            //echo $monst2 . ' = ';
            //echo $sumM2Dop;echo '</br>';
            $comp = new Fighting();
            $comp->comparison($sumM1Dop, $sumM2Dop, $monst1, $monst2);
        }
    }

    public function elementFight($monsters1,$monsters2,$arena)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');
        $this->hasName1 = $monsters1;
        $m1 = $this->hasName1;
        $sql = "SELECT * FROM animals WHERE name = :m1";
        $result = $pdo->prepare($sql);
        $result->bindParam(':m1',$m1,PDO::PARAM_STR, 30);
        $result->execute();
        $mon1 = $result->fetchAll();

        $this->hasName2 = $monsters2;
        $m2 = $this->hasName2;
        $sql2 = "SELECT * FROM animals WHERE name = :m2";
        $result2 = $pdo->prepare($sql2);
        $result2->bindParam(':m2',$m2,PDO::PARAM_STR, 30);
        $result2->execute();
        $mon2 = $result2->fetchAll();

        $this->themArena = $arena;
        $a = $this->themArena;
        $sql3 = "SELECT * FROM arenas WHERE name = :a";
        $result3 = $pdo->prepare($sql3);
        $result3->bindParam(':a',$a,PDO::PARAM_STR, 30);
        $result3->execute();
        $aren = $result3->fetchAll();

        $height=[];
        $weight=[];
        $strength=[];
        $id=[];
        $name=[];
        $height2=[];
        $weight2=[];
        $strength2=[];
        $name2=[];
        $id2=[];
        $nameArena=[];
        $elId=[];
        foreach ($mon1 as $item=>$value){
            $height[] = $value['height'];
            $weight[] = $value['weight'];
            $strength[] = $value['strength'];
            $name[] = $value['name'];
            $id[] = $value['element_id'];
        }

        foreach ($mon2 as $item=>$value){
            $height2[] = $value['height'];
            $weight2[] = $value['weight'];
            $strength2[] = $value['strength'];
            $name2[] = $value['name'];
            $id2[] = $value['element_id'];
        }
        foreach ($aren as $item=>$value){
            $nameArena[] = $value['name'];
            $elId[] = $value['element_id'];
        }

        if ($elId[0] == $id[0] ){
            $sum1 = ($strength[0]*6)+$height[0]+$weight[0];
        }else{
            $sum1 = ($strength[0]*2)+$height[0]+$weight[0];
        }
        if ($elId[0] == $id2[0] ){
            $sum2 = ($strength2[0]*6)+$height2[0]+$weight2[0];
        }else{
            $sum2 = ($strength2[0]*2)+$height2[0]+$weight2[0];
        }
        //echo 'Первый монстр : ' . $monsters1 . ' - Сумма балов: ' . $sum1;echo '</br>';
        //echo 'Второй монстр : ' . $monsters2 . ' - Сумма балов: ' . $sum2;echo '</br>';
        $compar2 = new Fighting();
        $ret = $compar2->comparison($sum1,$sum2,$monsters1,$monsters2);
        return $ret;
    }

    public function startFight($animal,$arena){
        if ($arena == Null){
            $basicFight = new Fighting();
            $basicFight->basicFight($animal[0],$animal[1]);echo '</br>';
            return 'Нет арены сражения';
        }else{
            $elementFight = new Fighting();
            $bbb = $elementFight->elementFight($animal[0], $animal[1], $arena);
            $eee = 'Арена сражения : ' . $arena;
            return 'Победитель - ' . $bbb . ' | ' . $eee;

        }
    }

}


