<?php
include __DIR__."/../models/profilModel.php";

class Profil
{
    public static function getAll(): void
    {
        $errors = [];
        if ($_SESSION["user"]["points"]>10){
            $start = date("Y/m/d");
            $end =date('Y-m-d', strtotime('+1 month', strtotime($date)));;
            $token = bin2hex(random_bytes(6));
            $newOffer = profilModel::createOffers([
                "name"=> "Client Fidele",
                "percent"=>"100",
                "start" => $start,
                "end"=>$end,
                "description"=> "Pour vous remerciez devotre  fidelite Easy Scooter vous offre une course gratuite",
                "code"=>$token
            ]);
        }
        if ($newOffer =1) {
            $offers = profilModel::getOffers();
            if (empty($offers)) {
                $errors["offers"] = "Oups vous n'avez pas d'offres actuellement";
            }
            $invoice = profilModel::getInvoice();
            if (empty($invoice)) {
                $errors["invoice"] = "Pensez à passer dans notre shop";
            } else {
                $_SESSION["profil"]["offers"] = $offers;
                $_SESSION["profil"]["invoice"] = $invoice;

                include "view/Profil/pages/userProfil.php";
            }
        }


    }
    public static function generateOffer():void{

    }
    public static function editProfil($userInfo):void{


    }

}