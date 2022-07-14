<?php
include __DIR__ .'\fb.php';
include __DIR__ . '\include\app.php';
include __DIR__ .'\include\menulogin.php';
?>

<!-- ====== Hero Start ====== -->
<section class="block1contact" id="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
          <!-- ====== Login Start ====== -->
        <section class="ud-login">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="ud-login-wrapper">
                  <div class="ud-login-logo">
                      <h2 class="text-uppercase"> <?php echo $lang['espaceclient']; ?> </h2>
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
                      echo $_GET["route"];

                      ?>
                  </div>
                    <div class="card-body">
                        <form role="form " method="post" action="connexion">
                            <div class="mb-3 text-left">
                                <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" aria-describedby="email-addon">
                            </div>
                            <div class="mb-3 text-left">
                                <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Password" name="pwd" aria-describedby="password-addon">
                            </div>
                            <div class="form-row ">
                                <div class="form-check form-check-info text-left">
                                    <a class="forget-pass text-sm" href="javascript:void(0)">
                                        <?php echo $lang['pwforget']; ?><!-- ====== Mot de passe oublié ? ====== -->
                                    </a>
                                    <p>
                                        <?php echo $lang['pasincrit']; ?><!-- ====== Pas encore inscrit ? ====== -->
                                        <a href="singup" >  <?php echo $lang['inscrirelogin']; ?><!-- ====== S'inscrire ====== --> </a>
                                    </p>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn ud-main-btn ud-white-btn w-100 my-4 mb-2"><?php echo $lang['menu4']; ?></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                </div>
              </div>
            </div>
          </div>
        </section>
</section>
    <!-- ====== Login End ====== -->
        