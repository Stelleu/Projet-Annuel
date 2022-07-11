<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Panier Easy</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="view/shop/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="view/shop/assets/css/font-awesome.css">

    <link rel="stylesheet" href="view/shop/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="view/shop/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="view/shop/assets/css/lightbox.css">
    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href=view/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=BFmLLKZGRCjfqKvFZiTrf8dMIqVFfGzCl7QHZu8bPGL0nERgXp_b1dfiP8hIvlcIWUHFyJ7-e2qU9TSwcKZjvuogGz0HikDgtLvbU9C3aCFrRcJ5RchtrfuxHZBdYxy1zSZauNCk4e3T3IS84yuByoJJ9wdrpV7sdPlxUkacjqk" charset="UTF-8"></script><script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="view/assets/css/soft-ui-dashboard.min.css?v=1.0.9" rel="stylesheet" />


</head>

<body>
<!--<header class="header-area header-sticky">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-12">-->
<!--                <nav class="main-nav">-->
<!--                    <!-- ***** Logo Start ***** -->-->
<!--                    <a href="index.html" class="logo">-->
<!--                        <img src="assets/images/logo.png">-->
<!--                    </a>-->
<!--                    <!-- ***** Logo End ***** -->-->
<!--                    <!-- ***** Menu Start ***** -->-->
<!--                    <ul class="nav">-->
<!--                        <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>-->
<!--                        <li class="scroll-to-section"><a href="index.html">Men's</a></li>-->
<!--                        <li class="scroll-to-section"><a href="index.html">Women's</a></li>-->
<!--                        <li class="scroll-to-section"><a href="index.html">Kid's</a></li>-->
<!--                        <li class="submenu">-->
<!--                            <a href="javascript:;">Pages</a>-->
<!--                            <ul>-->
<!--                                <li><a href="about.html">About Us</a></li>-->
<!--                                <li><a href="shop.php">Products</a></li>-->
<!--                                <li><a href="single-product.html">Single Product</a></li>-->
<!--                                <li><a href="contact.html">Contact Us</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="submenu">-->
<!--                            <a href="javascript:;">Features</a>-->
<!--                            <ul>-->
<!--                                <li><a href="#">Features Page 1</a></li>-->
<!--                                <li><a href="#">Features Page 2</a></li>-->
<!--                                <li><a href="#">Features Page 3</a></li>-->
<!--                                <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="scroll-to-section"><a href="index.html">Explore</a></li>-->
<!--                    </ul>-->
<!--                    <a class='menu-trigger'>-->
<!--                        <span>Menu</span>-->
<!--                    </a>-->
<!--                    <!-- ***** Menu End ***** -->-->
<!--                </nav>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</header>-->

<section class="section">
    <div class="container">
        <div class="row">
<!--            <div class="col-lg-8" >-->
<!--                <div class="row ">-->
<!--                    <div class="col d-flex justify-content-start  text-warning my-5">-->
<!--                        <h2 class="text-uppercase "> Mon panier</h2>-->
<!--                    </div>-->
<!--                    <div class="col d-flex justify-content-end  text-warning my-5">-->
<!--                        <p>Les articles seront réservés pendant ? minutes</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-12" >-->
<!--                    <div class="card mb-3" style="max-width: 540px;">-->
<!--                        <div class="row g-0">-->
<!--                            <div class="col-md-4">-->
<!--                                <img src="..." class="img-fluid rounded-start" alt="...">-->
<!--                            </div>-->
<!--                            <div class="col-md-8">-->
<!--                                <div class="card-body">-->
<!--                                    <h5 class="card-title text-bold">20.33 €</h5>-->
<!--                                    <p class="card-text">TITRE . DESCRIPTION</p>-->
<!--                                    <select class="form-select col-6" aria-label="Default select example">-->
<!--                                        <option selected>Qté 1</option>-->
<!--                                        <option value="1">Qté 2</option>-->
<!--                                        <option value="2">Qté 3</option>-->
<!--                                        <option value="3">Qté 4</option>-->
<!--                                    </select>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!---->
<!--            </div>-->
            <form method="post" action="checkout">
                <table class="table mt-5">
                <thead>
                <tr>
                    <th scope="col ">Produit</th>
                    <th scope="col">Editer</th>
                    <th scope="col">Totaux</th>
                </tr>
                </thead>
                <tbody>

            <?php if(isset($_SESSION["errors"])){?>

                    <?php
                        $total= 0;
                    if (empty($_SESSION['panier'])){
                        ?>
                <div class=" p-3 mb-2 bg-light text-dark d-flex align-items-center mt-3" role="alert">
                    <div>
                        <?php
                        foreach ($_SESSION["errors"] as $error) {
                            echo "<li>".$error;
                        }
                        unset($_SESSION["errors"]);
                        ?>
                    </div>
                </div>


                    <?php
                    }
            }else{
                  foreach ($products as $products){
                    $total = $total + $products['price_product'] * $_SESSION['panier'][$products['idProduct']]; ?>
                <tr>
                    <th scope="row">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= $products["picture"] ?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" name="name"><?= $products["name"] ?></h5>
                                        <p class="card-text" ><?= $products["description"] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                    <td>
                        <div class="row g-0">
                            <select class="form-select col-6" name="quantity" aria-label="Default select example">
                                <option value="1" selected><?=$_SESSION['panier'][$products['idProduct']]?></option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                                <option value="5"> 5</option>
                            </select>

                            <a href="cart?<?="cid=".$_SESSION['panier'][$products['idProduct']]?>" class="remove"><i class="fas fa-trash">&nbsp;</i>Supprimer </a></td>

        </div>
                    </td>
                    <td name="price"><?= $products["price_product"] ?></td>
                </tr>
                    <?php
                         }
                    }?>
                </tbody>
                <tfoot>
                <thead>
                <tr>
                    <th scope="col">Total : <?=$total?>€</th>
                </tr>
                </thead>
                <tr>

                <th class="text-end"></th>
                </tr>
                </tfoot>
            </table>
                <button type="submit" name="cart" class="btn text-white bg-gradient-faded-dark mb-0 mt-lg-auto w-100">Ajouter au panier</button>
        </div>
        </form>
    </div>
</section>


<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                    </div>
                    <ul>
                        <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                        <li><a href="#">hexashop@company.com</a></li>
                        <li><a href="#">010-020-0340</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <li><a href="#">Men’s Shopping</a></li>
                    <li><a href="#">Women’s Shopping</a></li>
                    <li><a href="#">Kid's Shopping</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">Homepage</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">FAQ's</a></li>
                    <li><a href="#">Shipping</a></li>
                    <li><a href="#">Tracking ID</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved.

                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a>

                        <br>Distributed By: <a href="https://themewagon.com" target="_blank" title="free & premium responsive templates">ThemeWagon</a></p>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="view/shop/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="view/shop/assets/js/popper.js"></script>
<script src="view/shop/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="view/shop/assets/js/owl-carousel.js"></script>
<script src="view/shop/assets/js/accordions.js"></script>
<script src="view/shop/assets/js/datepicker.js"></script>
<script src="view/shop/assets/js/scrollreveal.min.js"></script>
<script src="view/shop/assets/js/waypoints.min.js"></script>
<script src="view/shop/assets/js/jquery.counterup.min.js"></script>
<script src="view/shop/assets/js/imgfix.min.js"></script>
<script src="view/shop/assets/js/slick.js"></script>
<script src="view/shop/assets/js/lightbox.js"></script>
<script src="view/shop/assets/js/isotope.js"></script>

<!-- Global Init -->
<script src="view/shop/assets/js/custom.js"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
                $("."+selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>
<script>
    var request2;

    // formulaire de suppression
    $("#delArticle").submit(function(event){

        // Prevent default posting of form - put here to work in case of errors
        event.preventDefault();

        // Abort any pending request
        /*    if (request2) {
                request2.abort();
            }*/
        // setup some local variables
        var $form = $(this);

        // Let's select and cache all the fields
        var $inputs = $form.find("input, select, button, textarea");
        // Serialize the data in the form

        var serializedData = $form.serialize();
        console.log("Serializedata" + serializedData);
        // Let's disable the inputs for the duration of the Ajax request.
        // Note: we disable elements AFTER the form data has been serialized.
        // Disabled form elements will not be serialized.
        $inputs.prop("disabled", true);

        // Fire off the request to /form.php
        request2 = $.ajax({
            url: "controllers/cart.php",
            type: "get",
            data: serializedData
        });
        // Si la requete s'est bien exec renvoie ce qu'il y a en dessous
        request2.done(function (response, textStatus, jqXHR){
            $firstname= document.getElementsByName("delNumber")[0].value;
            console.log($firstname);
            $("#msgDelNumber").html($firstname);
            document.getElementById("msgDivDelUser").classList.remove("d-none");
            document.getElementById("msgDivAddUser").classList.add("d-none");

            $("#infoUser").load(window.location.href + " #infoUser" ); //sert a refresh la div contenant la liste des utilisateurs
            console.log("Suppression executé");
        });
        // Si la requete à une erreur
        request2.fail(function (jqXHR, textStatus, errorThrown){
            // Affiche l'erreur dans la console
            console.error(
                "Les erreurs suivantes sont rencontré: "+
                textStatus, errorThrown
            );
        });
        // Callback handler that will be called regardless
        // if the request failed or succeeded
        request2.always(function () {
            // Reenable the inputs
            $inputs.prop("disabled", false);
        });

    });
</script>

</body>

</html>
