<?php
include __DIR__."/../models/invoiceModel.php";
require __DIR__.'/../vendor/config.php';
require __DIR__.'/../vendor/stripe/stripe-php/init.php';
if(!empty($_GET['session_id'])){
    $session_id = $_GET['session_id'];
    Invoice::StripeSuccess([
        "sessionId" => $session_id,
    ]);
}
class Invoice
{
    public static function addInvoice(): void{
        $date = getdate();
        $status = 0;
        $price_order = $_SESSION['panier']['price_order'];
        $add = invoiceModel::addInvoice([
            "Date" => $date,
            "status" => $status,
            "price_order"=>$price_order,
            "idUser"    => $_SESSION["user"]["idUser"],

        ]);

    }
    public static function wallet(): void
    {
        //CALCUL DE POINT DE FIDELITE

    }
    public static function StripeSuccess($data): void
    {
        //On verifie si l'id de session n'a pas déjà été enregistré
        $result = invoiceModel::verifExisteStripeSession($data["sessionId"]);
        if(!empty($result)){
            $status = 'success';
            //Sinon on insert la cmomande en BDD
        }else{
            // Set API key
            \Stripe\Stripe::setApiKey(STRIPE_SECRET);
                 //On utilise l'API Stripe
            try {
                $checkout_session = \Stripe\Checkout\Session::retrieve($data["sessionId"]);

            }catch (\Stripe\Exception\ApiErrorException $e){
                $api_error = $e->getMessage();
            }
            if(empty($api_error) && $checkout_session){
                // Récupérer les détails d'un PaymentIntent
                try {
                    $paymentIntent = \Stripe\PaymentIntent::retrieve($checkout_session->payment_intent);
                } catch (\Stripe\Exception\ApiErrorException $e) {
                    $api_error = $e->getMessage();
                }
            }
            // On retrouve les details du client
            try {
                $customer = \Stripe\Customer::retrieve($checkout_session->customer);
            } catch (\Stripe\Exception\ApiErrorException $e) {
                $api_error = $e->getMessage();
            }
            if(empty($api_error) && $paymentIntent){
                // Check whether the payment was successful
                if(!empty($paymentIntent) && $paymentIntent->status == 'succeeded'){
                    // Transaction details
                    $stripe_checkout_session_id = $paymentIntent->id;
                    $paidAmount = $paymentIntent->amount;
                    $paidAmount = ($paidAmount/100);
                    $status = $paymentIntent->status;
                    // Customer details
                    $customer_name = $customer_email = '';
                    if(!empty($customer)){
                        $customer_name = !empty($customer->name)?$customer->name:'';
                        $customer_email = !empty($customer->email)?$customer->email:'';
                    }
                    $date= date('Y-m-d');
                    $idUser = $_SESSION["user"]["idUser"];
                    $newInvoice= invoiceModel::addInvoice([
                        "Date" => $date,
                        "status" => $status,
                        "price_order" => $paidAmount,
                        "idUser"=>$idUser,
                        "stripe_checkout_session_id"=>$stripe_checkout_session_id,
                    ]);
                    if ($newInvoice = 1){
                        $result = invoiceModel::verifExisteStripeSession($stripe_checkout_session_id);
                        //On ajoute chaque produit de la commande on l'insert en bdd
                        foreach ($_SESSION["products"] as $product){
                            $orderProduct = invoiceModel::addProduct([
                                "fkProduct" => $product["idProduct"],
                                "idOrder" => $result[0]["idOrder"],
                                "price_product"=> $product["price_product"]
                            ]);
                        }
                    }
                }
            }

        }

    }

}