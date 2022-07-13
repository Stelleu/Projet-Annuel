<?php
if(!empty($_SESSION["productinfo"])){
    $_SESSION["errors"] = "Votre panier est vide !";
//    print_r($_SESSION["errors"]);
    header("Location: checkout");
}else{ ?>
<?php

    require __DIR__.'\..\..\vendor\config.php';
    require __DIR__.'\..\..\vendor\stripe\stripe-php\init.php';

// This is your test secret API key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET);
header('Content-Type: application/json');
$YOUR_DOMAIN = 'http://localhost/';
//$stripeAmount = round($_SESSION["productinfo"][0]["price_product"]*100,2);
try {
    // Creation d'une session Stripe et d'un client
    $checkout_session = \Stripe\Checkout\Session::create([
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
        'phone_number_collection' => [
            'enabled' => true,
        ],
//        'customer_details.phone'  => $_SESSION["user"]["phone"],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success',
        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        'customer_email' => $_SESSION["user"]["email"],
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    $_SESSION["errors"] = $e->getMessage();
}

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
}