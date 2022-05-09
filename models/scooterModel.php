<?php
include __DIR__."/../database/setting.php";

class scooterModel
{
    public static function getAll()
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getUsersQuery = $databaseConnection->query("SELECT idScooter, `number`, `condition`, km, location, status, workzone FROM scooters;");
        $scooters = $getUsersQuery->fetchAll(PDO::FETCH_ASSOC);
        return $scooters;
    }

    public static function deleteScooter(int $id){
        echo $id . " ";
        $databaseConnection = DatabaseSettings::getConnection();
        /*echo " Connexion DB OK ";*/
        $deleteScooter = $databaseConnection->prepare("DELETE FROM scooters WHERE idScooter =:id");
        $deleteScooter->execute(["id"=>$id]);
    }

    public static function addScooter(int $number, string $condition, int $status, string $workzone){
        $databaseConnection = DatabaseSettings::getConnection();
        echo " Connexion DB OK ";
        $deleteScooter = $databaseConnection->prepare("INSERT INTO scooters ( `number`, `condition`, status, workzone) VALUES ( ?, ?, ?, ?)");
        $deleteScooter->execute([$number, $condition, $status, $workzone]);
    }

}