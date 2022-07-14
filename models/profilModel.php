<?php
include __DIR__."/../database/setting.php";

class profilModel
{
    public static function getOffers(): bool|array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getOffersQuery = $databaseConnection->query("SELECT * FROM offers Where start >=CURRENT_DATE ;");
        return $getOffersQuery->fetchAll(PDO::FETCH_ASSOC);


    }
    public static function getInvoice(): bool|array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getInvoicesQuery = $databaseConnection->query("SELECT * FROM orders;");
        return $getInvoicesQuery->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function createOffers($offer){
        $databaseConnection = DatabaseSettings::getConnection();
        $createOfferQuery = $databaseConnection->prepare("INSERT INTO offers(name,percent, start , end,description,code) VALUES(:name,:percent,:start,:end,:description,:code);");
        $createOfferQuery->execute($offer);
        return 1;
    }
    public static function editProfil(){
             $databaseConnection = DatabaseSettings::getConnection();

    }
//    public static function getOffers(){}
//    public static function getOffers(){}




}