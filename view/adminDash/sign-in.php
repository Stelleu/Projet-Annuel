<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title><?$title?></title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="view/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
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
                    <form method="POST" action="../sign-in"  >
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
                    <a href="sign-up" class="text-info text-gradient font-weight-bold">S'inscrire</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 <?php include "view/adminDash/includes/footer.php";?>



