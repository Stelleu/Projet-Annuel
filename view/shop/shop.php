<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Shop Easy</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="view/shop/assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="view/shop/assets/css/font-awesome.css">

    <link rel="stylesheet" href="view/shop/assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="view/shop/assets/css/owl-carousel.css">

    <link rel="stylesheet" href="view/shop/assets/css/lightbox.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    </head>
    
    <body>
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="index.html">Men's</a></li>
                            <li class="scroll-to-section"><a href="index.html">Women's</a></li>
                            <li class="scroll-to-section"><a href="index.html">Kid's</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="shop.php">Products</a></li>
                                    <li><a href="single-product.php">Single Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                                </ul>
                            </li>
<!--                            afficher le nombre de produit dans le panier -->
                            <li class="scroll-to-section"><a href="checkout"><i class="bi bi-cart-plus-fill"><?php
                                        if (empty($_SESSION['panier'])){
                                            echo 0;
                                        }else{
                                            echo count($_SESSION['panier']);
                                        }
                                        ?></i></a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>Check Our Products</h2>
                        <span>Awesome &amp; Creative HTML CSS layout by TemplateMo</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->
    <!-- ***** Products Area Starts ***** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?php foreach ($products as $cle => $infoproduct){?>
                    <div class="col-lg-4">
                    <?php foreach ($infoproduct as $cle =>$info){?>
                        <div class="item">
                        <?php if ($cle == "tag") {
                            switch ($info){
                                case 1: ?>
                                    <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                        Soldes
                                    </div>
                                <?php break;
                                 case 2: ?>
                                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                        Black Friday
                                    </div>
                                <?php break;
                                 case 3: ?>

                                     <div class="badge bg-info text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                        Promotion
                                    </div>
                                <?php break;

                                 case 4: ?>
                                    <div class="badge bg-warning text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                        Nouvelle Collection
                                    </div>
                                <?php break;
                                }
                               }?>

                        <?php if($cle=="picture"){?>
                            <div class="thumb">
                                <div class="hover-content">
                                    <form method="GET">
                                        <input type="hidden" name="id" value="<?php echo $infoproduct['idProduct'];?>"/>
                                        <button type="submit" class="btn" name="view" value="view">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <button type="submit" class="btn" name="cart" value="cart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </button>
                                    </div>
<!--                                    <img src="--><?php //echo $info ?><!--" alt="image du produit">-->
                                        <img src="view/shop/assets/images/women-01.jpg" alt="image du produit">
                                    </form>
                                </div>
                        </div>
                        <?php }elseif($cle == "name"){?>
                            <div class="down-content">
                            <div class="col">
                                <div class="row">
                            <h4><?php echo $info?></h4>
                            <ul class="d-flex justify-content-end small text-warning my-5 stars">
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                                <li class="fa fa-star"></li>
                            </ul>

                                </div>
                            </div>
                        <?php }elseif ($cle == "price_product"){?>
                            <span><?php echo $info."€" ?></span>


                    <?php }?>
                            </div>
                    <?php }?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

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

  </body>

</html>
