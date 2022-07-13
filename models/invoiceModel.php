<?php

class invoiceModel
{

    public static function addInvoice($createUser): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createUserQuery = $databaseConnection->prepare("INSERT INTO orders(Date,price_order,) VALUES(:Date,:price_order);");
        $createUserQuery->execute($createUser);
        return 1;
    }


}