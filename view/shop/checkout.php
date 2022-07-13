<?php
$title = "Panier";?>
<html>
<head>
    <title><?= $title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!--    <link rel="stylesheet" type="text/css" href="view/assets/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="view/shop/assets/css/checkout.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<section>
    <form action="payment" id="cart" method="POST">
        <div class="mx-10 d-none my-2 p-2 text-start alert" >
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
    <?php
    }else{ foreach ($products as $product){
    $total = $total + $product['price_product'] * $_SESSION['panier'][$product['idProduct']];
    $_SESSION['panier']['price_order'] = $total;
            ?>
    <div class="product">
        <img src="https://i.imgur.com/EHyR2nP.png" alt="The cover of Stubborn Attachments" />
        <div class="description">

            <h3><?php echo  $product["name"]?></h3>
            <h5><?php echo $product["price_product"] ."€";?></h5>
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
        <?php  if (empty($_SESSION["user"])){?>
            <button type="button" id="checkout-button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Payer</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center text-bold" id="exampleModalLabel">Connexion</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?php
                            // Contrôle des erreurs
                            if(isset($_SESSION["errors"])){
                                foreach ($_SESSION["errors"] as $error) {
                                    echo '<p class="alert alert-warning" role="alert"><i class="fas fa-info-circle"></i>'.$error.'</p>';
                                }
                                unset($_SESSION["errors"]);
                            } else if (isset($_GET['success'])){
                                echo '<p class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Vous êtes connecté ! </p>';
                            }
                            ?>
                            <form role="form" method="post" action="payment">

                                <div class="form-outline mb-4">
                                    <input type="email" class="form-control" id="form3Example3cg" placeholder="Email" aria-label="Email" name="email" aria-describedby="email-addon">

                                </div>
                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cg" class="form-control "  placeholder="Mot de passe" aria-label="Password" name="pwd" aria-describedby="password-addon" />
                                </div>
                                <p class="text-center text-muted mt-5 mb-0">Je n'ai pas de compte<a href="sign-up" class="fw-bold text-warning  mx-2"><u>S'inscrire</u></a></p>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary ">Se connecter</button>
                        </div>
                            </form>
                    </div>
                </div>
            </div>
        <?php }else{?>
            <button  type="submit" id="checkout-button">Payer</button>
        <?php }
    }
    ?>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
