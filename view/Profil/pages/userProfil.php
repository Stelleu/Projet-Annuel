<?php
$title = "Profil";
include __DIR__ . '\..\..\..\FRONT\fb.php';
include __DIR__ . '\header.php';
//include __DIR__ . '\include\menu.php';
?>


    <div class="container-fluid py-4">
        <div class="row">
                <?php if(empty($_SESSION["user"])){
                    header("Location: connexion");
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
                            <i class="material-icons opacity-10">edit</i>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">electric_scooter</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h4 class="mb-0">2,300</h4>
                                    <p class="text-sm mb-0 text-capitalize">KM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card">
                            <div class="card-header p-3 pt-2">
                                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">loyalty</i>
                                </div>
                                <div class="text-end pt-1">
                                    <h4 class="mb-0"><?php if (empty($_SESSION["user"]["points"])){ echo "0"  ;}else{
                                            echo $_SESSION["user"]["points"];}?></h4>
                                    <p class="text-sm mb-0 text-capitalize">Points</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row middle">

                    </div>
                    <div class="row my-5">

<!--                        <div class="col-4">-->
<!--                            <a class="btn bg-gradient-primary mt-4 w-100" href="" type="button">Démarrer une course</a>-->
<!--                        </div>-->
                    </div>
                <section>
                    <div class="row">
                        <div class="col">
                            <h2 >MES ACHATS</h2>
                            <a href="billing.php">Voir mon espace de Facturation</a>
                        </div>
                    </div>
                    <div>
                        <div class="row ">
                            <?php foreach ($invoice as $invoice){?>
                                <div class="card border border-warning mb-3" style="max-width: 18rem;">
                                    <div class="card-header text-bold text-warning"><?php echo "Commande du ".$invoice["Date"]?></div>
                                        <button class="btn btn-warning text-center" type="button" href="codepromo"><i class="material-icons opacity-10" >receipt</i> Télécharger ma facture </button>
                                    <hr class="dark horizontal my-0">
                                    <div class="card-footer bg-transparent border-warning">

                                    </div>
                                </div>
                            <?php }?>


                        </div>
                    </div>
                </section>

<!--                    Affichage des offres-->
                <section>
                    <div>
                        <h2 class="titleachats">MES AVANTAGES</h2>
                    </div>
                    <div class="row ">
                       <?php foreach ($offers as $offer){?>
                                             <div class="card border border-warning mb-3" style="max-width: 18rem;">
                                            <div class="card-header text-bold text-warning"><?php echo  $offer["name"]?></div>
                                            <hr class="dark horizontal my-0">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $offer["percent"]."% de réduction"?></h5>
                                                <p class="card-text"><?php echo $offer["description"]?></p>
                                            </div>
                                            <hr class="dark horizontal my-0">
                                            <div class="card-footer bg-transparent border-warning">
                                                <p><?php echo "validite du ".$offer["start"]." au ".$offer["end"]?></p>
                                                <button class="btn btn-warning text-center" onclick="showCode()" type="button" href="codepromo"> Voir le code </button>
                                                <input class="btn" id="code" style="display: none" value="<?php echo $offer["code"]?>">

                                            </div>
                                        </div>
                                    <?php }?>


                            </div>

                </section>

        </div>
            <div class="col-md-8 justify-content-center">
                <button type="button" class="btn btn-block bg-gradient-danger mb-3 justify-content-center" data-bs-toggle="modal" data-bs-target="#modal-notification">Supprimer mon compte</button>
                <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 class="modal-title font-weight-normal" id="modal-title-notification">Attention</h6>
                                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="py-3 text-center">
                                    <i class="material-icons h1 text-secondary">warning </i>
                                    <h4 class="text-gradient text-danger mt-4">Etes-vous sur de vouloir supprimez votre compte?</h4>
                                    <p>La suppression prendra effet immédiatement.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" href="tables?delete=delete" class="btn btn-white">Oui</button>
                                <button type="button" class="btn btn-link text-white ml-auto" data-bs-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>


        </div>
        </div>
    </div>

<?php
include __DIR__ . '\footer.php';
//include __DIR__ . '\include\menu.php';
?>
