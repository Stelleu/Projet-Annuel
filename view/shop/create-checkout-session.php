<?php
use \Stripe\Checkout\Session;
require __DIR__.'\..\..\vendor\autoload.php';
require __DIR__.'\..\..\vendor\config.php';
require __DIR__.'\..\..\vendor\stripe\stripe-php\init.php';
if (empty($_SESSION["user"])){
    header("Location : connexion");
}
//// This is your test secret API key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET);
header('Content-Type: application/json');
var_dump($_SESSION["user"]);
$YOUR_DOMAIN = 'http://localhost/';
if (empty($_SESSION["productinfo"])){
    $_SESSION["errors"] = "Votre panier est vide !";
    header("Location: checkout");
} else{
$stripeAmount = round($_SESSION["productinfo"][0]["price_product"]*100,2);
try {
    $checkout_session = \Stripe\Checkout\Session::create([
        'customer' => $_SESSION["user"]["idUser"],
        'customer_email' => $_SESSION["user"]["email"],
        'line_items' => [
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            array_map(fn(array $product) => [
                'quantity'   => 1,
                'price_data' => [
                    'currency'     => 'EUR',
                    'product_data' => [
                        'name' => $product['name']
                    ],
                    'unit_amount'  => round($product["price_product"]*100,2)
                ]
            ],$_SESSION["products"]),
        ],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success',
        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    $_SESSION["errors"] = $e->getMessage();
}

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
}