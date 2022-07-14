<?php
include __DIR__ ."/../models/forfaitModel.php";
if (count($_POST) == 5 ){
    if (isset($_POST["offerName"]) &&
        isset($_POST["percent"]) &&
        isset($_POST["description"]) &&
        isset($_POST["start"]) &&
        isset($_POST["end"])) {
        $offerName =ucwords(strtolower(trim($_POST["offerName"])));
        $description =ucwords(strtolower(trim($_POST["description"])));
        $percent = mb_strtolower(trim($_POST["percent"]));
        $start = $_POST["start"];
        $end = $_POST["end"];

        forfait::createOffer([
            "offerName" => $offerName,
            "percent" => $percent,
            "start" => $start,
            "end" => $end,
            "description" => $description
        ]);
    }
    if (isset($_POST["newName"]) &&
        isset($_POST["newStart"]) &&
        isset($_POST["newEnd"]) &&
        isset($_POST["newPercent"])){
        $newOfferName =ucwords(strtolower(trim($_POST["newName"])));
//    $description =ucwords(strtolower(trim($_POST["description"])));
        $newPercent = mb_strtolower(trim($_POST["newPercent"]));
        $newStart = $_POST["newStart"];
        $newEnd = $_POST["newEnd"];
        forfait::edit([
            "name" => $newOfferName,
            "percent" => $newPercent,
            "start" => $newStart,
            "end" => $newEnd,
        ]);
    }
}

if (isset($_GET["delete"],$_GET["id"])) {
    $idOffer = $_GET["id"];
    $action= $_GET["delete"];
    Forfait::delete($idOffer);
}

if (isset($_GET["edit"],$_GET["id"])) {
    $idOffer = $_GET["id"];
    Forfait::getById($idOffer);
}

class Forfait
{
    public static function get()
    {
        $offers = forfaitModel::getAll();
        include __DIR__ . '/../view/adminDash/offers.php';
    }
    public static function getById($id)
    {
        $errors=[];
        $offer = forfaitModel::getById($id);
        if (!empty($offer)){
            $_SESSION["offerinfo"]=$offer;
            header("Location: editOffer");
        } else{
            $errors[]="L'offre est introuvable ";
            $_SESSION["errors"]=$errors ;

        }
    }

    public static function delete(int $id){
        if (forfaitModel::deleteOffer($id) != 1){
            $_SESSION["errors"]= "Un probleme technique est survenu ";
        }
        header("Location: offers");
    }
    public static function edit($editOffer){
        $edit= [];
        $errors=[];
        if ($editOffer["name"] != $_SESSION["offerinfo"][0]["name"]){
            $edit["name"]=$editOffer["name"];
        }
        if ($editOffer["percent"] != $_SESSION["offerinfo"][0]["percent"]){
            $edit["percent"]=$editOffer["percent"];
        }if ($editOffer["start"] != $_SESSION["offerinfo"][0]["start"]){
            $edit["start"]=$editOffer["start"];
        }if ($editOffer["end"] != $_SESSION["offerinfo"][0]["end"]){
            $edit["end"]=$editOffer["end"];
        }
        try {
            $newoffer= forfaitModel::editOffer($_SESSION["offerinfo"][0]["idOffer"],$edit);
            $offer = forfaitModel::getById($_SESSION["offerinfo"][0]["idOffer"]);
            if (!empty($offer)){
                $_SESSION["offerinfo"]=$offer;
                echo "<script> window.location.href='offers';</script>";
            } else{
                $errors[]="L'offre est introuvable ";
                $_SESSION["errors"]=$errors ;
                header("Location: offers");

            }
        }catch (PDOException $exception){
            $exception->getMessage();
            $errors = "Suite à un probleme technique, les modification n'ont pas été prise en compte";
            $_SESSION["errors"]= $errors;
            echo "<script> window.location.href='editOffers';</script>";

        }


    }

    public static function getForfait(){
        $Forfaits= forfaitModel::getForfait();

    }

    public static function createOffer($offer)
    {
        try {
            $errors=[];
            $start = new DateTime($offer['start']);
            $end = new DateTime($offer['end']);
            //verifier la date, le nom et le pourcentage
            $interval = date_diff($end,$start);
            if  ($interval->days < 2){
                $errors[]= "Votre offre doit durée minimum 2 jours" ;
            }
            if (!is_numeric($offer['percent'])){
                $errors[]= "Le pourcentage de réduction ne doit contenir que des chiffres" ;
            }
            $token = bin2hex(random_bytes(6));
            if (count($errors) == 0){
                $create = forfaitModel::createOffer([
                    "name" =>  $offer['offerName'],
                    "percent" =>  $offer['percent'],
                    "start" =>  $offer['start'],
                    "end" =>  $offer['end'],
                    "description" =>  $offer['description'],
                    "code" => $token
                ]);
//                    header("Location: newoffer#validation");

            }else{
                $error[]= "";
                $_SESSION["errors"] = $errors;
                header("Location: newoffer");
            }


        } catch (PDOException $exception) {
            $exception->getMessage();
        }

    }


}