<?php


class Arena
/*{
    public function getArena()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8','root','');
        $sql = "SELECT * FROM arenas";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $a = $result->fetchAll();
        $newArray=[];

        foreach ($a as $item=>$value){
            $newArray[] = $value['name'];
        }
        echo 'Конкретная арена : ' . $newArray[0];echo '</br>';
        $rand_frases = array_rand($newArray, 1);
        $r = $newArray[$rand_frases];
        echo 'Рандомная арена : ' . $r;
    }

}*/
{
    public $hasArena;
    public function getArena($nameArena=NULL)
{
    $pdo = new PDO('mysql:host=localhost;dbname=lesson_eight;charset=utf8', 'root', '');
    if ($nameArena != NULL){
        $this->hasArena = $nameArena;
        $aaa = $this->hasArena;
        $sql = "SELECT * FROM arenas WHERE name = :aaa";
        $result = $pdo->prepare($sql);
        $result->bindParam(':aaa',$aaa,PDO::PARAM_STR, 30);
        $result->execute();
        $a = $result->fetchAll();
        $newArray=[];
        foreach ($a as $item=>$value){
            $newArray[] = $value['name'];
        }
        echo 'Конкретная арена : ' . $newArray[0];echo '</br>';

    }else{
        $sql = "SELECT * FROM arenas";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $a = $result->fetchAll();
        $newArray2=[];
        foreach ($a as $item=>$value){
            $newArray2[] = $value['name'];
        }
        $rand_frases = array_rand($newArray2, 1);
        $r = $newArray2[$rand_frases];
        echo 'Рандомная арена : ' . $r;echo '</br>';
    }
}

}