<?php
include __DIR__ .'\fb.php';
include __DIR__ . '\include\app.php';
include __DIR__ . '\include\menu.php';
var_dump($_SESSION);
?>


<section>
        <body class="martinprofil">
                <section>
                        <div id="wrapper">
                            <section class="left">
                            <!-- <img src="assets/images/logo/logo.svg" alt="Logo"> -->
                            </section>

                            <section class="right">
                                <H1 class="titleprofile">Bonjour, <?php echo $_SESSION["user"]["firstname"]?></H1>
                                <div class="descriptionprofile">
                                <img id="profilimg" src="assets\images\photoprofil.jpg" alt="" width="200px" height="200px">
                                    <div class="contenudescriptions">
                                    
                                        <p id="prenomprofile">
                                            <?php echo $_SESSION["user"]["firstname"]?>.<?php echo $_SESSION["user"]["lastname"]?> - <?php echo $_SESSION["user"]["phone"]?>
                                        </p>
                                        <p id="mailprofile">
                                            <?php echo $_SESSION["user"]["firstname"]?>
                                        </p>
                                    </div>
                                </div>

                                    <div class="infoprofil">
                                            <div class="kmparcourus">
                                                <div class="km">
                                                <p>%NUMERO%</p>
                                                <p>KILOMETRES</p>
                                                </div>
                                            </div>

                                            <div class="kmparcourus">
                                            <div class="cours">
                                                <p>%NUMERO%</p>
                                                <p>COURSE</p>
                                            </div>
                                        </div>

                                        <div class="kmparcourus">
                                            <div class="points">
                                            <p>%NUMERO%</p>
                                            <p>POINTS</p>
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
                </section>
