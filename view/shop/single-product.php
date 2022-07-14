<?php $title = $_SESSION["productinfo"][0]["name"]?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="view/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="view/assets/img/favicon.png">
    <title> <?php $title?></title>


    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href=view/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />

    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=BFmLLKZGRCjfqKvFZiTrf8dMIqVFfGzCl7QHZu8bPGL0nERgXp_b1dfiP8hIvlcIWUHFyJ7-e2qU9TSwcKZjvuogGz0HikDgtLvbU9C3aCFrRcJ5RchtrfuxHZBdYxy1zSZauNCk4e3T3IS84yuByoJJ9wdrpV7sdPlxUkacjqk" charset="UTF-8"></script><script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />

    <link id="pagestyle" href="view/assets/css/soft-ui-dashboard.min.css?v=1.0.9" rel="stylesheet" />


</head>
<body class="g-sidenav-show  bg-gray-100">

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <?php if(isset($_SESSION["errors"])){?>
                    <div class=" p-3 mb-2 bg-danger text-white d-flex align-items-center mt-3" role="alert">
                        <div>
                            <?php
                               foreach ($_SESSION["errors"] as $error) {
                                    echo "<li>".$error;
                               }
                                    unset($_SESSION["errors"]);
                            ?>
                        </div>
                    </div>
                <?php } ?>
                <div class="row">
                    <div class="col text-center">
                        <form method="post" action="checkout">
                        <img class="w-100 border-radius-lg shadow-lg mx-auto" src="<?php echo $_SESSION["productinfo"][0]["picture"]?>" alt="chair">
<!--                                <div class="my-gallery d-flex mt-4 pt-2" itemscope itemtype="http://schema.org/ImageGallery">-->
<!--                                    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">-->
<!--                                        <a href="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/ecommerce/black-chair.jpg" itemprop="contentUrl" data-size="500x600">-->
<!--                                            <img class="w-75 min-height-100 max-height-100 border-radius-lg shadow" src="--><?php //echo $_SESSION["productinfo"][0]["picture"]?><!--" itemprop="thumbnail" alt="Image description" />-->
<!--                                        </a>-->
<!--                                    </figure>-->
<!--                                </div>-->
                        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                                    <div class="pswp__bg"></div>

                                    <div class="pswp__scroll-wrap">


                                        <div class="pswp__container">
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                            <div class="pswp__item"></div>
                                        </div>

                                        <div class="pswp__ui pswp__ui--hidden">
                                            <div class="pswp__top-bar">

                                                <div class="pswp__counter"></div>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--close">Close (Esc)</button>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--fs">Fullscreen</button>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--left">Prev
                                                </button>
                                                <button class="btn btn-white btn-sm pswp__button pswp__button--arrow--right">Next
                                                </button>


                                                <div class="pswp__preloader">
                                                    <div class="pswp__preloader__icn">
                                                        <div class="pswp__preloader__cut">
                                                            <div class="pswp__preloader__donut"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                                <div class="pswp__share-tooltip"></div>
                                            </div>
                                            <div class="pswp__caption">
                                                <div class="pswp__caption__center"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col mt-auto">
                                <h3 class="mt-lg-0 mt-4 text-uppercase"><?php echo $_SESSION["productinfo"][0]["name"]?></h3>
                                <div class="rating">
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star" aria-hidden="true"></i>
                                    <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                </div>
                                <br>
                                <h5><?php echo $_SESSION["productinfo"][0]["price_product"]."€"?></h5>
                                <br>
                                <label class="mt-4">Description</label>
                                <ul>
                                    <li><?php echo $_SESSION["productinfo"][0]["description"]?></li>
                                </ul>
                                <div class="row mt-4">
                                    <div class="col-lg-2">
                                        <label>Quantité</label>
                                            <select class="form-control" name="choices-quantity" id="choices-quantity">
                                                <option value="1" selected="">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-5">
                                        <input hidden name="id" value="<?php echo $_SESSION["productinfo"][0]["idProduct"]?>">
                                        <button type="submit" class="btn bg-gradient-primary mb-0 mt-lg-auto w-100">Payer maintenant</button>
                                    </div>
                                </div>
                                    </form>
                            </div>
                        </div>
</body>
</html>