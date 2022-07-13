<?php
include __DIR__ ."/../models/productModel.php";
if (count($_POST) == 8 ){
    if (isset($_POST["name"]) &&
        isset($_POST["weight"]) &&
        isset($_POST["price"]) &&
        isset($_POST["quantity"]) &&
        isset($_POST["description"])&&
        isset($_POST["choices-tags"])&&
        isset($_POST["choices-category"])&&
        isset($_FILES['file']["tmp_name"])&&
        isset($_FILES['file']["size"])&&
        isset($_FILES['file']["name"])
    ) {
        $name =ucwords(strtolower(trim($_POST["name"])));
        $weight = $_POST["weight"];
        $price = $_POST["price"];
        $quantity = $_POST["quantity"];
        $description =ucwords(strtolower(trim($_POST["description"])));
        $tag = mb_strtolower(trim($_POST["choices-tags"]));
        $category = $_POST["choices-category"];
        $pictureFile = $_FILES['file']["tmp_name"];
        $pictureName =  $_FILES['file']["name"];
        $pictureSize = $_FILES['file']["size"];
        Product::newProduct([
            "name" => $name,
            "weight" => $weight,
            "price" => $price,
            "quantity" => $quantity,
            "description" => $description,
            "tag" => $tag,
            "category" => $category,
            "picturePath" => $pictureFile,
            "pictureName" => $pictureName,
            "pictureSize" => $pictureSize,
        ]);
    }

    if (isset($_POST["newName"]) &&
        isset($_POST["newWeight"]) &&
        isset($_POST["newPrice"]) &&
        isset($_POST["newQuantity"]) &&
        isset($_POST["new_choices_category"])&&
        isset($_POST["new_choices_tags"])&&
        isset($_POST["newCategory"])&&
        isset($_FILES['newPicture']["tmp_name"])&&
        isset($_FILES['newPicture']["size"])&&
        isset($_FILES['newPicture']["name"])
    ) {
        $name =ucwords(strtolower(trim($_POST["newName"])));
        $weight = $_POST["newWeight"];
        $price = $_POST["newPrice"];
        $quantity = $_POST["newQuantity"];
        $description =ucwords(strtolower(trim($_POST["newDescription"])));
        $tag = mb_strtolower(trim($_POST["new_choices_tags"]));
        $category = $_POST["newCategory"];
        $pictureFile = $_FILES['newPicture']["tmp_name"];
        $pictureName =  $_FILES['newPicture']["name"];
        $pictureSize = $_FILES['newPicture']["size"];
        Product::editProduct([
            "name" => $name,
            "weight" => $weight,
            "price" => $price,
            "quantity" => $quantity,
            "description" => $description,
            "tag" => $tag,
            "category" => $category,
            "picturePath" => $pictureFile,
            "pictureName" => $pictureName,
            "pictureSize" => $pictureSize,
        ]);
    }
}
if (isset($_GET["edit"],$_GET["id"])) {
    $idProduct = $_GET["id"];
    Product::getById($idProduct);
}
if (isset($_GET["delete"],$_GET["id"])) {
    $idProduct = $_GET["id"];
    Product::deleteProduct($idProduct);
}
class Product
{
    public static function get($route): void
    {
        $products = productModel::getAll();
            include __DIR__ . '\..\view\adminDash\products.php';

    }
    public static function getById($id): void
    {
        $errors=[];
        try {
            $product = productModel::getById($id);
            if (!empty($product)){
                $_SESSION["productinfo"]= $product;
                    header("Location: editProduct");
            }else{
                $errors[]="L'offre est introuvable ";
                $_SESSION["errors"]=$errors ;
            }
        }catch  (PDOException $exception) {
            $exception->getMessage();
        }

    }

    public static function delete(int $id): void
    {
        if (forfaitModel::deleteOffer($id) != 1){
            $_SESSION["errors"]= "Un probleme technique est survenu ";
        }
        header("Location: offers");
    }
    public static function editProduct($editProduct): void
    {
        echo "cc";
        $edit= [];
        $errors=[];
        if ($editProduct["name"] != $_SESSION["productinfo"][0]["name"]){
            $edit["name"]=$editProduct["name"];
        }
        if ($editProduct["weight"] != $_SESSION["productinfo"][0]["weight"]){
            $edit["weight"]=$editProduct["weight"];
        }if ($editProduct["price"] != $_SESSION["productinfo"][0]["price"]){
            $edit["price"]=$editProduct["price"];
        }if ($editProduct["description"] != $_SESSION["productinfo"][0]["description"]){
            $edit["description"]=$editProduct["description"];
        }if ($editProduct["tag"] != $_SESSION["productinfo"][0]["tag"]){
            $edit["tag"]=$editProduct["tag"];
        }if ($editProduct["category"] != $_SESSION["productinfo"][0]["category"]){
            $edit["category"]=$editProduct["category"];
        }if ($editProduct["picturePath"] != $_SESSION["productinfo"][0]["picturePath"]){
            $edit["picturePath"]=$editProduct["picturePath"];
        }if ($editProduct["pictureName"] != $_SESSION["productinfo"][0]["pictureName"]){
            $edit["pictureName"]=$editProduct["pictureName"];
        }if ($editProduct["pictureSize"] != $_SESSION["productinfo"][0]["pictureSize"]){
            $edit["pictureSize"]=$editProduct["pictureSize"];
        }
        try {
            echo"je vais editer";
            $editproduct= productModel::editProduct($_SESSION["productinfo"][0]["idProduct"],$edit);
            $product = productModel::getById($_SESSION["productinfo"][0]["idProduct"]);
            if (!empty($product)){
                $_SESSION["offerinfo"]=$product;
                echo "<script> window.location.href='products';</script>";
            } else{
                $errors[]="Le produit est introuvable ";
                $_SESSION["errors"]=$errors ;
                header("Location: products");

            }
        }catch (PDOException $exception){
            $errors[]= $exception->getMessage();
            $errors[] = "Suite à un probleme technique, les modification n'ont pas été prise en compte";
            $_SESSION["errors"]= $errors;
            echo "<script> window.location.href='editOffers';</script>";

        }


    }

    public static function newProduct($product): void

    {
        define('TARGET', 'Images/Produits/');    // Repertoire cible
        define('MAX_SIZE', 10000000);    // Taille max en octets du fichier
        define('WIDTH_MAX', 1500);    // Largeur max de l'image en pixels
        define('HEIGHT_MAX', 1500);

        try {
            $errors=[];
            if ($product['quantity']<5){
                $errors[]= "Il vous faut un minimum de 10 articles en stock" ;
            }
            if  ($product['weight'] < 0){
                $errors[]= "Votre article doit au minimum peser 1kg" ;
            }
            if (is_numeric($product['price'])) {
                if ($product['price']<0) {
                    $errors[] = "Le prix de votre article doit être supérieure à 1€.";
                }
            }else{
                $errors[] = "Le prix est incorrect";
            }

            $tabExt = array('jpg','png','jpeg');

            if (!empty($product['pictureName'])) {
                echo "coucou je parse les photos";
                // Recuperation de l'extension du fichier
                $extension  = pathinfo($product['pictureName'], PATHINFO_EXTENSION);

                // On verifie l'extension du fichier
                if(in_array(strtolower($extension),$tabExt)){

                    // On recupere les dimensions du fichier
                    $infosImg = getimagesize($product['picturePath']);
                    // On verifie le type de l'image
                    if($infosImg[2] >= 1 && $infosImg[2] <= 14){
                        // On verifie les dimensions et taille de l'image
                        if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && ($product['pictureSize']) <= MAX_SIZE){
                            // Parcours du tableau d'erreurs
                            if(isset($_FILES['file']['error']) && UPLOAD_ERR_OK === $_FILES['file']['error']){
                                // On renomme le fichier
                                $nomImage = md5(uniqid()) .'.'. $extension;
                                if(!move_uploaded_file($product['picturePath'], TARGET.$nomImage)) //Si la fonction renvoie False, c'est que ça n'a fonctionné...
                                {
                                    $errors[]='Echec de l\'upload !';
                                }
                            }else{
                                $errors[] = 'Une erreur interne a empêché l\'uplaod de l\'image';
                            }
                        }else{
                            // Sinon erreur sur les dimensions et taille de l'image
                            $errors[] = 'Taille max de l\'image: 1000x1000';
                        }
                    }else{
                        // Sinon erreur sur le type de l'image
                        $errors[] = 'Format autorisé : jpg, png, jpeg';
                    }
                }else{
                    // Sinon on affiche une erreur pour l'extension
                    $errors[] = 'L\'extension du fichier est incorrecte !';
                }
            }
            $fullprice = intval($product['price'])/100 * 20;
            if (count($errors) == 0){
                $create = productModel::createProduct([
                    "name" =>  $product['name'],
                    "description" =>  $product['description'],
                    "price_product" =>  $product['price'],
                    "category" =>  $product['category'],
                    "picture" =>  TARGET.$nomImage,
                    "quantity" =>  $product['quantity'],
                    "price_order" =>  $fullprice,
                    "tag" =>  $product['tag'],
                    "weight" =>  $product['weight']
                ]);
            }else{
                $_SESSION["errors"] = $errors;
                header("Location: newproduct");
            }
        } catch (PDOException $exception) {
            $errors= $exception->getMessage();
            $_SESSION["errors"] = $errors;
            header("Location: newproduct");


        }

    }

    public static function pictureVerification(){
        define('TARGET', 'Images/Produits/');    // Repertoire cible
        define('MAX_SIZE', 10000000);    // Taille max en octets du fichier
        define('WIDTH_MAX', 1500);    // Largeur max de l'image en pixels
        define('HEIGHT_MAX', 1500);
        $errors = [];
        $tabExt = array('jpg','png','jpeg');

        if (!empty($product['pictureName'])) {
            // Recuperation de l'extension du fichier
            $extension  = pathinfo($product['pictureName'], PATHINFO_EXTENSION);

            // On verifie l'extension du fichier
            if(in_array(strtolower($extension),$tabExt)){

                // On recupere les dimensions du fichier
                $infosImg = getimagesize($product['picturePath']);
                // On verifie le type de l'image
                if($infosImg[2] >= 1 && $infosImg[2] <= 14){
                    // On verifie les dimensions et taille de l'image
                    if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && ($product['pictureSize']) <= MAX_SIZE){
                        // Parcours du tableau d'erreurs
                        if(isset($_FILES['file']['error']) && UPLOAD_ERR_OK === $_FILES['file']['error']){
                            // On renomme le fichier
                            $nomImage = md5(uniqid()) .'.'. $extension;
                            if(move_uploaded_file($product['picturePath'], TARGET.$nomImage)) //Si la fonction renvoie False, c'est que ça n'a fonctionné...
                            {
                               return TARGET.$nomImage;
                            }else{
                                $errors[] ='Echec de l\'upload !';
                            }
                        }else{
                            $errors[] = 'Une erreur interne a empêché l\'uplaod de l\'image';
                        }
                    }else{
                        // Sinon erreur sur les dimensions et taille de l'image
                        $errors[] = 'Taille max de l\'image: 1000x1000';
                    }
                }else{
                    // Sinon erreur sur le type de l'image
                    $errors[] = 'Format autorisé : jpg, png, jpeg';
                }
            }else{
                // Sinon on affiche une erreur pour l'extension
                $errors[] = 'L\'extension du fichier est incorrecte !';
            }
            $_SESSION["errors"] =$errors;
            header("Location: newproduct");

        }
    }
    public static function deleteProduct($idProduct): void
    {}
}
