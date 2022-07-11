<?php
include __DIR__ .'\fb.php';
include __DIR__ . '\include\app.php';
?>

<section class="vh-100 bg-image">
    <div class="mask d-flex align-items-center h-100 ">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5"><?php echo $lang['espaceclient']; ?></h2>
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

                            ?>

                            <form role="form " method="post" action="connexion">

                                <div class="form-outline mb-4">
                                    <input type="email" class="form-control" id="form3Example3cg" placeholder="Email" aria-label="Email" name="email" aria-describedby="email-addon">

                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" id="form3Example4cg" class="form-control "  placeholder="Mot de passe" aria-label="Password" name="pwd" aria-describedby="password-addon" />
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                            class="btn btn-block  ud-main-btn ud-white-btn w-100 my-4 mb-2 text-body"><?php echo $lang['menu4']; ?></button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0"><?php echo $lang['pasincrit']; ?><a href="sign-up" class="fw-bold text-body"><u><?php echo $lang['inscrirelogin']; ?></u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>