<?php
include __DIR__."/../database/setting.php";


class forfaitModel
{


    public static function getAll()
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUsersQuery = $databaseConnection->query("SELECT idOffer, name, percent, start, end , description, tag FROM offers;");
        return $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById(int $id)
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUsersQuery = $databaseConnection->query("SELECT idOffer,name, percent, start, end , description, tag FROM offers  WHERE $id =idOffer;");
        return $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function deleteOffer(int $id):int{
        $databaseConnection = DatabaseSettings::getConnection();
        /*echo " Connexion DB OK ";*/
        $deleteOffer= $databaseConnection->prepare("DELETE FROM offers WHERE idOffer =:id");
        $deleteOffer->execute(["id"=>$id]);
        return 1;
    }
    public static function editOffer(int $id,$offer):int{
        $set = [];
        $allowedKeys = ["name","percent","start","end","description","tag"];
       foreach ($offer as $key => $value){
           if (!in_array($key, $allowedKeys)){
               continue;
           }
           $set[]  = "$key = :$key";
           var_dump($set);
       }
       $set = implode(",",$set);
        var_dump($set,$id);

        $databaseConnection = DatabaseSettings::getConnection();
        $updateOfferQuery = $databaseConnection->prepare("UPDATE offers SET $set WHERE idOffer =:id ");
        return $updateOfferQuery->execute(array_merge(["id" => $id], $offer));

    }


    public static function createOffer($createOffer): int
    {
        echo"cc";
        $databaseConnection = DatabaseSettings::getConnection();
        $createOfferQuery = $databaseConnection->prepare("INSERT INTO offers(name,percent, start , end,description) VALUES(:name,:percent,:start,:end,:description);");
        $createOfferQuery->execute($createOffer);
        return 1;
    }

    public static function getForfait(){
        $databaseConnection = DatabaseSettings::getConnection();
        $getUsersQuery = $databaseConnection->query("SELECT * FROM offers  WHERE forfait = forfait;");
        return $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
    }

}