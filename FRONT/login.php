<?php
include("fb.php");
include("include/app.php");
include ("include/menulogin.php");
?>


<!-- ====== Hero Start ====== -->
<section class="block1contact" id="home">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
          <h1 class="logintitle">
            <?php echo $lang['espaceclient']; ?> 
           <!-- Connexion - Espace client -->
          </h1>
          <!-- ====== Login Start ====== -->
    <section class="ud-login">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-login-wrapper">
              <div class="ud-login-logo">
                <img src="assets/images/logo/logo-black.svg" alt="logo" />
              </div>
              <form method="POST" action="connexion.php" style="width: 700px;">
        <div class="form-row">
            <div class="form-group col-md-6" style="text-align:left;">
                <label for="name" >Email :</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6" style="text-align:left;">
                <label for="password" >Mot de passe :</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="checkbox" name="connexion" checked>
                <label for="connexion">Mémoriser mes identifiants </label>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="ud-main-btn ud-white-btn"><?php echo $lang['menu4']; ?><!-- Connexion --></button>
            </div>
        </div>
    </form>

            

              <a class="forget-pass" href="javascript:void(0)">
                 <?php echo $lang['pwforget']; ?><!-- ====== Mot de passe oublié ? ====== -->
              </a>
              <p class="signup-option">
              <?php echo $lang['pasincrit']; ?><!-- ====== Pas encore inscrit ? ====== --> <a href="\Projet-Annuel\FRONT\singup.php">  <?php echo $lang['inscrirelogin']; ?><!-- ====== S'inscrire ====== --> </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
</section>
    <!-- ====== Login End ====== -->
        