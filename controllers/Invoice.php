<?php
include __DIR__."/../models/invoiceModel.php";

class Invoice
{
    public static function addInvoice(){
        $date = getdate();
        $status = 0;
        $price_order = $_SESSION['panier']['price_order'];
        $add = invoiceModel::addInvoice([
            "Date" => $date,
            "status" => $status,
            "price_order"=>$price_order,
            "idUser"    => $_SESSION["info"]["idUser"],

        ]);

    }

}