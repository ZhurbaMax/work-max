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

        $newArr=[];
        $newArr2=[];

        foreach ($a as $items=>$value){
            foreach ($value as $item=>$val){
                $newArr[$item]=$val;
            }
        }
        foreach ($b as $items2=>$value2){
            foreach ($value2 as $item2=>$val2){
                $newArr2[$item2]=$val2;
            }
        }
        $sum1 = ($newArr['strength']*2)+$newArr['height']+$newArr['weight'];
        $sum2 = ($newArr2['strength']*2)+$newArr2['height']+$newArr2['weight'];
        $compar = new Fighting();
        $result = $compar->comparison($sum1,$sum2,$monster1,$monster2);
        return $result;
    }

    public function comparison($sumOne, $sumTwo, $monst1, $monst2){
        if($sumOne > $sumTwo){
            return $monst1;
        }
        if ($sumOne < $sumTwo){
            return $monst2;
        }
        if ($sumOne == $sumTwo){
            $sumM1Dop = rand(1, 10);
            $sumM2Dop = rand(1, 10);
            $comp = new Fighting();
            $result2 = $comp->comparison($sumM1Dop, $sumM2Dop, $monst1, $monst2);
            return $result2;
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

        $newArr=[];
        $newArr2=[];
        $newArr3=[];

        foreach ($mon1 as $items=>$value){
            foreach ($value as $item=>$val){
                $newArr[$item]=$val;
            }
        }
        foreach ($mon2 as $items2=>$value2){
            foreach ($value2 as $item2=>$val2){
                $newArr2[$item2]=$val2;
            }
    }
        foreach ($aren as $items3=>$value3){
            foreach ($value3 as $item3=>$val3){
                $newArr3[$item3]=$val3;
            }
        }

        if ($newArr3['element_id'] == $newArr['element_id'] ){
            $sum1 = ($newArr['strength'] *6)+$newArr['height']+$newArr['weight'];
        }else{
            $sum1 = ($newArr['strength'] *2)+$newArr['height']+$newArr['weight'];
        }
        if ($newArr3['element_id'] == $newArr2['element_id'] ){
            $sum2 = ($newArr2['strength'] *6)+$newArr2['height']+$newArr2['weight'];
        }else{
            $sum2 = ($newArr2['strength'] *2)+$newArr2['height']+$newArr2['weight'];
        }
        $compar2 = new Fighting();
        $ret = $compar2->comparison($sum1,$sum2,$monsters1,$monsters2);
        return $ret;
}

    public function startFight($animal,$arena = Null){
        if (empty($arena)){
            $basicFight = new Fighting();
            $aaa = $basicFight->basicFight($animal[0],$animal[1]);
            $ccc = 'Нет арены сражения';
            return 'Победитель - ' . $aaa . ' | ' . $ccc;
        }else{
            $elementFight = new Fighting();
            $bbb = $elementFight->elementFight($animal[0], $animal[1], $arena);
            $eee = 'Арена сражения : ' . $arena;
            return 'Победитель - ' . $bbb . ' | ' . $eee;
        }
}
}
