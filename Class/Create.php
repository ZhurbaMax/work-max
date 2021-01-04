<?php

class Create
{
    public $hasName1;
    public $hasName2;
    public $mo1;
    public $mo2;


    public function saveMonster($saveName,$saveHeight,$saveWeight,$saveStrength)
    {
        if (isset($saveName) && isset($saveHeight) && isset($saveWeight) && isset($saveStrength)){
            $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');

            $sql = "INSERT INTO monster (name,height,weight,strength) VALUES (:saveName,:saveHeight,:saveWeight,:saveStrength)";
            $result = $pdo->prepare($sql);
            $result->bindParam(':saveName', $saveName);
            $result->bindParam(':saveHeight', $saveHeight);
            $result->bindParam(':saveWeight', $saveWeight);
            $result->bindParam(':saveStrength', $saveStrength);
            $result->execute();
        }
    }

    public function choiceMonster()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');
        $sql = "SELECT * FROM monster";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $mons = $result->fetchAll();
        $newArray=[];
        foreach ($mons as $item=>$value){
            $newArray[] = $value['name'];
        }
        return $newArray;
    }

    public function formFight($monster1,$monster2)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');
        $this->hasName1 = $monster1;
        $a1 = $this->hasName1;
        $sql = "SELECT * FROM monster WHERE name = :a1";
        $result = $pdo->prepare($sql);
        $result->bindParam(':a1',$a1,PDO::PARAM_STR, 30);
        $result->execute();
        $a = $result->fetchAll();

        $this->hasName2 = $monster2;
        $a2 = $this->hasName2;
        $sql2 = "SELECT * FROM monster WHERE name = :a2";
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
        $compar = new Create();
        $result = $compar->comparis($sum1,$sum2,$monster1,$monster2);
        return $result;
    }

    public function comparis($sumOne, $sumTwo, $monst1, $monst2){
        if($sumOne > $sumTwo){
            return $monst1;
        }
        if ($sumOne < $sumTwo){
            return $monst2;
        }
        if ($sumOne == $sumTwo){
            $sumM1Dop = rand(1, 10);
            $sumM2Dop = rand(1, 10);
            $comp = new Create();
            $result2 = $comp->comparis($sumM1Dop, $sumM2Dop, $monst1, $monst2);
            return $result2;
        }
    }
    public function resultFight($mons1,$mons2){
            $this->mo1 = $mons1;
            $this->mo2 = $mons2;
            $formFight = new Create();
            $aaa = $formFight->formFight($mons1,$mons2);
            return 'Победитель - ' . $aaa;
    }

    public function getHome()
    {

    }



    }


