<?php
include "../../view/signHeader.php";
?>

    <main class="main-content  mt-0">
        <section class="min-vh-100 mb-8">  
            <?//= $adminsignup?>
            <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../../view/assets/img/curved-images/curved14.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 text-center mx-auto">
                            <h1 class="text-white mb-2 mt-5">Code de confirmation</h1>
                            <p class="text-lead text-white">Regarder vos mails, vous venez de recevoir votre confirmation de compte</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <form method="post" action="../../index.php?route=sign-up">
                    <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h5>Inscrivez-vous avec :</h5>
                                </div>
                                <div class="card-body">
                                    <form role="form text-left">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Prenom" aria-label="firstname" name="firstname" aria-describedby="email-addon">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Inscription</button>
                                        </div>
                                        <p class="text-sm mt-3 mb-0">J'ai déjà un compte. <a href="formsign-up.php" class="text-dark font-weight-bolder">Connexion</a></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>

        </section>
    </main>
                <?php
                if( count($_POST)==1 && !empty($_POST["code"]) ){

                    //Afficher OK si les identifiants sont bons sinon afficher NOK
                    //password_verify

                    $code = trim($_POST["code"]);

                    if (isset($_SESSION["info"]["email"])) {
                        $email = $_SESSION["info"]["email"];
                    }else {
                        $email = $_SESSION["email"];
                    }

                    $connection = connectDB();
                    $queryPrepared = $connection->prepare("SELECT * FROM ".PRE."User WHERE Email=:login");
                    $queryPrepared->execute(["login"=>$email]);
                    $results = $queryPrepared->fetch(PDO::FETCH_ASSOC);


                    if($results["Confcode"]!=$code){
                        echo '<div class="alert alert-danger">Code incorrect</div>';
                    }else if( $results["Confcode"] == $code ){

                        $queryPrepared = $connection->prepare("UPDATE ".PRE."User SET `Check`=:check WHERE email=:email");
                        $queryPrepared->execute(["check"=>1, "email"=>$email]);

                        $_SESSION["auth"]=true;
                        $_SESSION["info"]=$results;

                        echo '<div class="alert alert-sucess">Connexion réussie</div>';
                        header("Location: Profil.php");
                    }else{
                        echo '<div class="alert alert-danger">Identifiants incorrects</div>';
                    }
                }

                ?>

                <form method="POST">
                    <div class="row">

                        <div class="offset-md-1 col-md-10 my-4 mb-2">
                            <input type="text" class="form-control" name="code" placeholder="Code de confirmation">
                        </div>

                    </div>

                    <div class="row">

                        <div class="form-check offset-md-4 col-md-4 align mb-4">
                            <button type="submit" class="btn btn-primary center">Valider</button>
                        </div>

                    </div>

                </form>

            </div>
        </div>
    </div>
<?php
include "../../view/signFooter.php";
?>