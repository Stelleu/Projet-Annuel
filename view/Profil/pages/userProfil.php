<?php
$title = "Profil";
include __DIR__ . '\..\..\..\FRONT\fb.php';
include __DIR__ . '\header.php';
//include __DIR__ . '\include\menu.php';
?>


    <div class="container-fluid py-4">
        <div class="row">

                <?php if(empty($_SESSION["user"])){
                }else{?>
                <div class="row ">
                    <h2>Bonjour, <?php echo $_SESSION["user"]["firstname"]?></h2>
                    <div class=" col-xl-3 col-sm mb-xl-0 mb-4 text-end">
                        <p id="prenomprofile">
                            <?php echo $_SESSION["user"]["firstname"]?>.<?php echo $_SESSION["user"]["lastname"]?> - <?php echo $_SESSION["user"]["phone"]?>
                        </p>
                        <p id="mailprofile">
                            <?php echo $_SESSION["user"]["email"]; }?>
                        </p>
                    </div>

                    <div class="col-xl-3 col-sm mb-xl-0 mb-4">
                        <div class="icon icon-sm icon-shape bg-gradient-primary shadow-primary text-center border-radius  ">
                            <i class="material-icons opacity-10">person</i>
                        </div>

                    </div>
                    <div class="row middle">
                        <?php if (isset($_SESSION["user"])){?>
                            <div class="col-4">
                                <a class="btn bg-gradient-primary mt-4 w-100" href="" type="button">se déconnecter</a>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row my-5">
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10">person</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <h4 class="mb-0">2,300</h4>
                                        <p class="text-sm mb-0 text-capitalize">KM</p>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                            <div class="card">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10">person</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <h4 class="mb-0">3,462</h4>
                                        <p class="text-sm mb-0 text-capitalize">Courses</p>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                    <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card">
                                <div class="card-header p-3 pt-2">
                                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                        <i class="material-icons opacity-10">weekend</i>
                                    </div>
                                    <div class="text-end pt-1">
                                        <p class="text-sm mb-0 text-capitalize">Sales</p>
                                        <h4 class="mb-0">$103,430</h4>
                                    </div>
                                </div>
                                <hr class="dark horizontal my-0">
                                <div class="card-footer p-3">
                                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <a class="btn bg-gradient-primary mt-4 w-100" href="" type="button">Démarrer une course</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mb-4">
                        <div class="card z-index-2  ">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                                    <div class="chart">
                                        <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="mb-0 "> Daily Sales </h6>
                                <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
                                <hr class="dark horizontal">
                                <div class="d-flex ">
                                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                                    <p class="mb-0 text-sm"> updated 4 min ago </p>
                                </div>
                            </div>
                        </div>
                    </div>

                <div>
                    <div>
                        <h2 class="titleachats" href="">MES ACHATS</h2>
                    </div>
                    <div>
                        (achats)
                    </div>
                    <div>
                        <a href="">Voir mes factures</a>
                    </div>
                </div>

                <div>
                    <h2 class="titleachats">MES AVANTAGES</h2>
                </div>

                <div class="carreprofile">
                    <h5>40% de réduction sur votre prochaine course </h5>
                    <p>10€ de course minimum   </p>
                    <a class="buttonprofile" href="#">J'en Profite</a>
                </div>

                <div class="carreprofile">
                    <h5>40% de réduction sur votre prochaine course </h5>
                    <p>10€ de course minimum   </p>
                    <a class="buttonprofile" href="#">J'en Profite</a>
                </div>

                <div class="carreprofile">
                    <h5>40% de réduction sur votre prochaine course </h5>
                    <p>10€ de course minimum   </p>
                    <a class="buttonprofile" href="#">J'en Profite</a>
                </div>
        </div>
        </div>
    </div>

<?php
include __DIR__ . '\footer.php';
//include __DIR__ . '\include\menu.php';
?>
