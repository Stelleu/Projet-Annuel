<?php
include __DIR__."/../database/setting.php";

class invoiceModel
{

    public static function addInvoice($createOrder): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createOrderQuery = $databaseConnection->prepare("INSERT INTO orders(Date,status, price_order , idUser,stripe_checkout_session_id) VALUES(:Date,:status,:price_order,:idUser,:stripe_checkout_session_id);");
        $createOrderQuery->execute($createOrder);
        return 1;
    }
    public static function addProduct($product): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createProduitQuery = $databaseConnection->prepare("INSERT INTO purchase(fkProduct,idOrder, quantity , price_product) VALUES(:fkProduct,:idOrder,:quantity,:price_product);");
        $createProduitQuery->execute($product);
        return 1;
    }


    public static function verifExisteStripeSession($checkoutId): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $checkSessionIdQuery = $databaseConnection->prepare("SELECT * FROM order WHERE $checkoutId = stripe_checkout_session_id ;");
        return $checkSessionIdQuery->fetchAll(PDO::FETCH_ASSOC);}


}