<?php
include __DIR__ ."/../models/Forfait.php";

if (count($_POST) == 2 && !empty($_POST["email"]) && !empty($_POST["pwd"])) {
    $result = Login::connexion();
}
class Forfait
{
    public static function createOffer()
    {
//        https://www.conseil-webmaster.com/formation/php/05-fonctions-dates-php.php
         $offerName     =    $_POST["name"];
         $percent       =    $_POST["price"];
         $description   =    $_POST["description"];


         Forfait::createOffer([

         ]);




    }

}