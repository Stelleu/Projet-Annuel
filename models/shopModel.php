<?php
include __DIR__ ."/../database/setting.php";

class shopModel
{
    public static function getById($id): array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getProductsQuery = $databaseConnection->query("SELECT * FROM products  WHERE idProduct = $id;");
        return $getProductsQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getAll(): array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getProductsQuery = $databaseConnection->query("SELECT * FROM products;");
        return $getProductsQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByIds($ids): array

    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getProductsQuery = $databaseConnection->query("SELECT * FROM products  WHERE idProduct IN (".implode(',',$ids).")");
        return $getProductsQuery->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function validShoppingBag($ids): array

    {
        $set = [];
        $set2 = [];
        $allowedKeys = ["firstname","lastname","phone","email","passwd","status_user","address","points","wallet","birthdate","zipcode","state","check","token"];
        foreach ($user as $key => $value){
            echo $key;
            if (!in_array($key, $allowedKeys)){
                continue;
            }
            $set[]  = ":$key";
            $set2[]  = "$key";
        }
        $set = implode(",",$set);
        $set2 = implode(",",$set2);
        echo $set2;
        $databaseConnection = DatabaseSettings::getConnection();
        $updateUsersQuery = $databaseConnection->prepare("INSERT INTO users($set2) VALUES($set);");
        return $updateUsersQuery->execute($user);

//        scooterModel::addScooter($number,$condition,$status,$workzoneLabel);
        header("Location: ../tables");
    }


}