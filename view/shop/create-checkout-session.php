<?php
if(empty($_SESSION["product"])){
    $_SESSION["errors"] = "Votre panier est vide !";
//    print_r($_SESSION["errors"]);
    header("Location: checkout");
}else{
    ?>
<?php
    require __DIR__.'\..\..\vendor\config.php';
    require __DIR__.'\..\..\vendor\stripe\stripe-php\init.php';

// This is your test secret API key.
\Stripe\Stripe::setApiKey(STRIPE_SECRET);
header('Content-Type: application/json');
$YOUR_DOMAIN = 'http://localhost/';
//$stripeAmount = round($_SESSION["productinfo"][0]["price_product"]*100,2);

    $response = array(
        'status' => 0,
        'error' => array(
            'message' => 'Invalid Request!'
        )
    );

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $input = file_get_contents('php://input');
        $request = json_decode($input);
    }

    if (json_last_error() !== JSON_ERROR_NONE) {
        http_response_code(400);
        echo json_encode($response);
        exit;
    }



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
                        'name' => $product['name'],
                        'metadata' => [
                            'pro_id' => $product['idProduct']
                            ]
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
        'success_url' => $YOUR_DOMAIN . '/success'.'?session_id={CHECKOUT_SESSION_ID}',
        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        'customer_email' => $_SESSION["user"]["email"],
        'customer_name' => $_SESSION["user"]["firstname"],
    ]);
} catch (\Stripe\Exception\ApiErrorException $e) {
    $api_error = $e->getMessage();
}
//header("HTTP/1.1 303 See Other");
//header("Location: " . $checkout_session->url);
//}
echo json_encode($response);