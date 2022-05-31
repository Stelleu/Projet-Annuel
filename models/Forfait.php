<?php
include __DIR__."/../database/setting.php";


class Forfait
{
    public static function create($createOffer): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createOfferQuery = $databaseConnection->prepare("INSERT INTO offers(name,percent , start , end , description) VALUES(:name,:percent, :start, :email,:end, :description);");
        $createOfferQuery->execute($createOffer);
        return 1;
    }

}