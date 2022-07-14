<?php
include __DIR__ ."/../models/shopModel.php";

if (isset($_POST["choices-quantity"],$_POST["idProduct"])) {
    $idProduct = $_GET["id"];
    $quantity = $_POST["choices-quantity"];
    Shop::addCart([
        "id"=>$idProduct,
        "qte"=>$quantity
    ]);
}

if ($_GET["route"] == "success"){

}
if (isset($_GET["view"],$_GET["id"])){
    $idProduct = $_GET["id"];
    Shop::getByArticleId($idProduct);
}
if (isset($_POST["cid"])){
    $cId=$_POST["cid"];
    echo "cc";
    Shop::deleteFromCart($cId);
}

if (isset($_GET["cart"],$_GET["id"])){
$idProduct = $_GET["id"];
    $quantity  = 1;
    Shop::getById($idProduct,$quantity);
}
if (isset($_GET["checkout"],$_SESSION["panier"],)){
    Shop::getByIds();
}
class Shop
{

    public static function getAll(): void
    {
        $products = shopModel::getAll();
            include __DIR__ . '/../view/shop/shop.php';
    }

    public static function getById($id): void
    {
        if (!isset($_SESSION["panier"])){
            $_SESSION["panier"]=array();
        }
        $produit = shopModel::getById($id);
        if (!empty($produit)) {
            if (isset($_SESSION["panier"][$id])) {
                var_dump($_SESSION["panier"][$id]);
                if ($produit["quantity"]<0) {
                $_SESSION["errors"] = "Malheurement ce produit est en rupture de stock";
                return;
                }; // qte
            } else {
                //si non on ajoute le produit
                $_SESSION["panier"][$id] = 1;
                header("Location: checkout");
                exit;
            }
        } else {
            $_SESSION["errors"] = "Le produit n'existe pas";
            header("Location: checkout");

        }
    }

    public static function getByIds(): void
    {
        $errors = [];
        $total = 0;
        if(!isset($_SESSION['panier'])){
            $errors[] = "Votre panier est vide";
            $_SESSION["errors"] = $errors;
            include __DIR__ . '/../view/shop/checkout.php';

        }else{

            $ids = array_keys($_SESSION['panier']);
            if (empty($ids)) {
                $errors[] = "Votre panier est vide";

            } else {

                $products = shopModel::getByIds($ids);
                $_SESSION["products"] = $products;
                include __DIR__ . '/../view/shop/checkout.php';

            }
        }
    }

    public static function deleteFromCart($id): void
    {
        try {
            /* Retirez le produit du panier, vérifiez le paramètre "remove" de l'URL, c'est l'identifiant du produit, assurez-vous qu'il s'agit d'un numéro et vérifiez s'il est dans le panier.*/
//            var_dump($_SESSION['panier']);
           unset($_SESSION['panier'][$id]);
            include __DIR__ . '/../view/shop/checkout.php';
            exit;
        } catch (Exception $e) {
            $errors=  $e->getMessage();
        }
    }
    public static function getByArticleId($id): void
    {
        $errors=[];
        try {
            $product = shopModel::getById($id);
            var_dump($product);
            if (!empty($product)){
                $_SESSION["productinfo"]= $product;
                header("Location: article");
            }else{
                $errors[]="L'offre est introuvable ";
                $_SESSION["errors"]=$errors ;
            }
        }catch  (PDOException $exception) {
            $errors[]=$exception->getMessage();
            $_SESSION["errors"]=$errors ;

        }

    }

    public static function toDeliver(){

    }
}