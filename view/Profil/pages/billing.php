<!--
=================================
Facturation
=========================================================
-->
<?php
$title = "Facturation";
include __DIR__ . '\..\..\..\FRONT\fb.php';
include __DIR__ . '\header.php';
//include __DIR__ . '\include\menu.php';
?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-xl-6 mb-xl-0 mb-4">
              <div class="card bg-transparent shadow-xl">
                <div class="overflow-hidden position-relative border-radius-xl">
                  <img src="view/Profil/assets/img/illustrations/pattern-tree.svg" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                  <span class="mask bg-gradient-dark opacity-10"></span>
                  <div class="card-body position-relative z-index-1 p-3">
                    <i class="material-icons text-white p-2">wifi</i>
                    <h5 class="text-white mt-4 mb-5 pb-2">4562&nbsp;&nbsp;&nbsp;1122&nbsp;&nbsp;&nbsp;4594&nbsp;&nbsp;&nbsp;7852</h5>
                    <div class="d-flex">
                      <div class="d-flex">
                        <div class="me-4">
                          <p class="text-white text-sm opacity-8 mb-0">Card Holder</p>
                          <h6 class="text-white mb-0"><?php echo $_SESSION["user"]["firstname"] . " ". $_SESSION["user"]["lastname"]?></h6>
                        </div>
                        <div>
                          <p class="text-white text-sm opacity-8 mb-0">Expires</p>
                          <h6 class="text-white mb-0">11/22</h6>
                        </div>
                      </div>
                      <div class="ms-auto w-20 d-flex align-items-end justify-content-end">
                        <img class="w-60 mt-2" src="/view/assets/img/logos/mastercard.png" alt="logo">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                <div class="col-md-6 col-6 mb-5">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="material-icons opacity-10">account_balance_wallet</i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-3 text-center">
                      <h6 class="text-center mb-0">Mon Portefeuille</h6>
                      <span class="text-xs">L'équivalent de mes points en €</span>
                      <hr class="horizontal dark my-3">
                      <h5 class="mb-0"><?php if(empty($_SESSION["user"]["wallet"])){ echo "0 €";}else{ echo $_SESSION["user"]["wallet"];}?></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Information de livraison</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm"><?php echo $_SESSION["user"]["firstname"] ." ".  $_SESSION["user"]["lastname"]?></h6>
                    <span class="mb-2 text-xs">N° SIRET: <span class="text-dark font-weight-bold ms-sm-2"><?php echo $_SESSION["user"]["siret"]?></span></span>
                    <span class="mb-2 text-xs">Email: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $_SESSION["user"]["email"]?></span></span>
                    <span class="text-xs">Phone: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $_SESSION["user"]["phone"]?></span></span>
                    <span class="text-xs">Adresse: <span class="text-dark ms-sm-2 font-weight-bold"><?php echo $_SESSION["user"]["address"]?></span></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
          <div class="col-lg-4  mt-4">
              <div class="card h-100">
                  <div class="card-header pb-0 p-3">
                      <div class="row">
                          <div class="col-6 d-flex align-items-center">
                              <h6 class="mb-0">Factures</h6>
                          </div>
                      </div>
                  </div>
                  <div class="card-body p-3 pb-0">
                      <ul class="list-group">
                          <?php foreach ($invoice as $invoice){?>
                              <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                                  <div class="d-flex flex-column">
                                      <h6 class="mb-1 text-dark font-weight-bold text-sm"><?php echo $invoice["Date"]?></h6>
                                      <span class="text-xs"><?php echo "CMD°". $invoice["idOrder"]?></span>
                                  </div>
                                  <div class="d-flex align-items-center text-sm">
                                      <?php echo $invoice["price_order"]. " €"?>
                                      <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="material-icons text-lg position-relative me-1">picture_as_pdf</i> PDF</button>
                                  </div>
                              </li>
                          <?php } ?>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      </div>
        <?php
        include __DIR__ . '\footer.php';
        //include __DIR__ . '\include\menu.php';
        ?>
