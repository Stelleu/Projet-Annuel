<?php session_start()?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../view/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../view/assets/img/favicon.png">
  <title><?$title?></title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../view/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../view/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../view/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../../view/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>
<?php if(isset($_SESSION["result"])  ){?>
    <div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">Identifiants incorrects</div>
        <?php
    foreach ($_SESSION["result"] as $error) {
        echo "<li>" . $error;
    }
    unset($_SESSION["result"]); ?>
<?php } ?>


<?php if(isset($_SESSION["errors"])  ){
    ?>
    <div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">Identifiants incorrects</div>
        <?php
    foreach ($_SESSION["errors"] as $error) {
        echo "<li>" . $error;
    }
    unset($_SESSION["result"]); ?>
<?php } ?>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.php">
            EASY SCOOTER</a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.php">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/profile.html">
                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                    Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../../view/adminDash/sign-up.php">
                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                    Sign Up
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-2" href="../pages/sign-in.php">
                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                    Sign In
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="../../index.php" >
                  <!-- https://github.com/bpesquet/MonBlog/blob/bcf89ae1f7cb9e095819291cf45c95fdd91b3430/Controleur/Routeur.php#L17 -->
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="email-addon" name="email">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Password" aria-describedby="password-addon" name="pwd">
                    </div>
<!--                    <div class="form-check form-switch">-->
<!--                      <input class="form-check-input" type="checkbox" id="rememberMe" name="submited" checked="">-->
<!--                      <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>-->
<!--                    </div>-->
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Connexion</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1"
                  <p class="mb-4 text-sm mx-auto">
                    Je n'ai pas de compte.
                    <a href="../../view/adminDash/sign-up.php" class="text-info text-gradient font-weight-bold">S'inscrire</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../../view/assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 <?php include "../../view/signFooter.php";?>



