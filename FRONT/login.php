<?php
include("fb.php");
include("include/app.php");
include ("include/menulogin.php");
?>

<!-- ====== Hero Start ====== -->
<section class="block1contact" id="home">
<div>
    <a href="login.php?lang=fr">fr</a>
    <a href="login.php?lang=en">en</a>
  </div>
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
              <form class="ud-login-form">
                <div class="ud-form-group">
                  <input
                    type="email"
                    name="email"
                    placeholder="Email"
                  />
                </div>
                <div class="ud-form-group">
                  <input
                    type="password"
                    name="mot de passe"
                    placeholder="*********"
                  />
                </div>
                <div class="ud-form-group">
                  <button type="submit" class="ud-main-btn w-100"><?php echo $lang['loginlogin']; ?></button>
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
        