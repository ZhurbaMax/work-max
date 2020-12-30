<?php

class Animals
{
    public $hasName;
    public function getName($nameMonster=NULL)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');
        if ($nameMonster!=NULL){
            $this->hasName = $nameMonster;
            $aaa = $this->hasName;
            $sql = "SELECT * FROM animals WHERE name = :aaa";
            $result = $pdo->prepare($sql);
            $result->bindParam(':aaa',$aaa,PDO::PARAM_STR, 30);
            $result->execute();
            $a = $result->fetchAll();
            $newArray=[];
              foreach ($a as $item=>$value){
                  $newArray[] = $value['name'];
              }
              echo 'Конкретный монстр : ' . $newArray[0];echo '</br>';

              }else{
                $sql = "SELECT * FROM animals";
                $result = $pdo->query($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $a = $result->fetchAll();
                $newArray2=[];
                foreach ($a as $item=>$value){
                    $newArray2[] = $value['name'];
                }
                $rand_frases = array_rand($newArray2, 1);
                $r = $newArray2[$rand_frases];
                echo 'Рандомный монстр : ' . $r;echo '</br>';
        }
        }
}