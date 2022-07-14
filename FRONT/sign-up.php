<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="view/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="view/assets/img/favicon.png">
    <title><?$title?></title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="view/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="view/assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>
<body class="">
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="home">
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
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="dash">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="userprofil">
                                    <i class="fa fa-user opacity-6 text-dark me-1"></i>
                                    Profil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link me-2" href="connexion">
                                    <i class="fas fa-key opacity-6 text-dark me-1"></i>
                                    Connexion
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
                                <h3 class="font-weight-bolder text-info text-gradient">Inscription</h3>
                                <p class="mb-0">Enter your email and password to sign in</p>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="sign-up"  >
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
                                    <label>Prénom</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Prenom" name="firstname" aria-label="firstname" aria-describedby="firstname-addon" >
                                    </div>
                                    <label>Nom</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" placeholder="Nom" name="lastname"  aria-label="lastname" aria-describedby="lastname-addon">
                                    </div>
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email" name="email" aria-label="email" aria-describedby="email-addon">
                                    </div>
                                    <label>Téléphone</label>
                                    <div class="mb-3">
                                        <input type="tel" class="form-control" placeholder="Phone" name="phone" aria-label="phone" aria-describedby="phone-addon">
                                    </div>
                                    <label>Mot de passe</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Mot de passe" aria-label="pwd" aria-describedby="pwd-addon" name="pwd">
                                    </div>

                                    <label>Confirmation de mot de passe</label>
                                    <div class="mb-3">
                                        <input type="password" class="form-control" placeholder="Mot de passe" aria-label="Password" aria-describedby="pwd-addon" name="confirmpwd">
                                    </div>
                                    <label>Souscrire à un abonnement </label>
                                    <div class="mb-3">
                                        <div class="row">
                                            <div class="col" >
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="forfait" value="journalier" id="customRadio2">
                                                    <label class="custom-control-label" for="customRadio2">forfait journalier pour 9,99€</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="forfait" value="8" id="customRadio2">
                                                    <label class="custom-control-label" for="customRadio2">8 trajets pour 19,99€</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="forfait" value="25" id="customRadio2">
                                                    <label class="custom-control-label" for="customRadio2">25 trajets pour 44,99€</label>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="forfait" value="50" id="customRadio2">
                                                    <label class="custom-control-label" for="customRadio2">50 trajets pour 79,99€</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="forfait" value="NA" id="customRadio2">
                                                    <label class="custom-control-label" for="customRadio2">Aucun abonnement</label>
                                                </div>
                                            </div>

                                        </div>

                                        </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">S'inscrire</button>
                                    </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1"
                            <p class="mb-4 text-sm mx-auto">
                                J'ai un compte.
                                <a href="sign-up" class="text-info text-gradient font-weight-bold">Se connecter</a>
                            </p>
                        </div>
                                    </div>
                                </form>
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



