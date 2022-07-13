<?php

class invoiceModel
{

    public static function addInvoice($createUser): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createUserQuery = $databaseConnection->prepare("INSERT INTO order values () ;");
        $createUserQuery->execute($createUser);
        return 1;
    }


}