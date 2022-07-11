<?php
$title = "Panier";?>
<html>
<head>
    <title><?= $title?></title>
    <link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/shop/assets/css/checkout.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<section>
    <form action="payment" id="cart" method="POST">
        <div class="mx-10 d-none my-2 p-2 text-start alert " id="msgDivDelScooter" role="alert">
            <a class="px-3" href="shop"> Continuer mon shopping</a>
        </div>
    <?php
    $total= 0;
    if(!empty($_SESSION["errors"])){?>
            <div class=" p-3 mb-2 bg-light text-dark d-flex align-items-center mt-3" role="alert">
            <?php
            foreach ($_SESSION["errors"] as $error) {
                echo '<p class="alert alert-warning" role="alert"><i class="fas fa-info-circle"></i>'.$error.'</p>';
            }
            unset($_SESSION["errors"]);
            ?>
            </div>
<!--        if (empty($_SESSION['panier'])){?>-->
    <?php
    }else{ foreach ($products as $product){
    $total = $total + $product['price_product'] * $_SESSION['panier'][$product['idProduct']];
            ?>
    <div class="product">
        <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
        <div class="description">

            <h3><?php echo  $product["name"]?></h3>
            <h5><?php echo $product["price_product"] ."€";?></h5>
<!--            <select class="form-select col-6" name="quantity" aria-label="Default select example">-->
<!--                <option value="1" selected>--><?//=$_SESSION["panier"][$product['idProduct']]?><!--</option>-->
<!--                <option value="2"> 2</option>-->
<!--                <option value="3"> 3</option>-->
<!--                <option value="4"> 4</option>-->
<!--                <option value="5"> 5</option>-->
<!--            </select>-->
            <input type="number" name="quantity" value="<?=$_SESSION["panier"][$product['idProduct']]?>" >
            <input type="hidden" name="cid" value="<?php echo $product['idProduct'];?>"/>
            <a href="checkout"><button type="button" class="btn" name="delete" value="delete"  data-bs-toggle="tooltip"  data-bs-original-title="Supprimer l'offre">
                    <i class="fas fa-trash text-secondary"></i></button></a>
        </div>
    </div>
    <?php
    }
    ?>
    <h3 class="text-uppercase text-end mx-3">Total : <?=$total?>€</h3>
        <button  type="submit" id="checkout-button">Payer</button>
        <?php }
    ?>
    </form>
</section>
</body>
</html>
