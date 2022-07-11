<?php
include __DIR__ ."/../database/setting.php";

class productModel
{
    public static function getAll(): array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getProductsQuery = $databaseConnection->query("SELECT * FROM products;");
        return $getProductsQuery->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getById(int $id): array
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $getProductQuery = $databaseConnection->query("SELECT * FROM products  WHERE $id =idProduct;");
        return $getProductQuery->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function deleteProduct(int $id):int{
        $databaseConnection = DatabaseSettings::getConnection();
        $deleteProduct= $databaseConnection->prepare("DELETE FROM products WHERE idProduct =:id");
        $deleteProduct->execute(["id"=>$id]);
        return 1;
    }
    public static function editProduct(int $id,$product):int{
        $set = [];
        $allowedKeys = ["name","description","price_product","category","picture","quantity","price_order","price_product","vat","tag","weight"];
        foreach ($product as $key => $value){
            if (!in_array($key, $allowedKeys)){
                continue;
            }
            $set[]  = "$key = :$key";
            var_dump($set);
        }
        $set = implode(",",$set);
        var_dump($set,$id);

        $databaseConnection = DatabaseSettings::getConnection();
        $updateProductQuery = $databaseConnection->prepare("UPDATE products SET $set WHERE idProduct =:id ");
        return $updateProductQuery->execute(array_merge(["id" => $id], $product));

    }
    public static function createProduct($createProduct): int
    {
        $databaseConnection = DatabaseSettings::getConnection();
        $createProductQuery = $databaseConnection->prepare("INSERT INTO products(name, description, price_product, category , picture, quantity,price_order,vat,tag,weight) VALUES(:name, :description, :price_product, :category , :picture, :quantity,:price_order,'20',:tag,:weight);");
        $createProductQuery->execute($createProduct);
        return 1;
    }
    public static function addProduct($createProduct){
        $set = [];
        $set2 = [];
        $allowedKeys = ["name","description","price_product","category","picture","quantity","price_order","vat","tag","weight"];
        foreach ($createProduct as $key => $value){
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
        $updateUsersQuery = $databaseConnection->prepare("INSERT INTO products($set2) VALUES($set);");
        return $updateUsersQuery->execute($createProduct);
    }

}