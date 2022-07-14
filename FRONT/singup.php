<?php
include("fb.php");
include("include/app.php");
include ("include/menusingup.php");

?> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EASYSCOOTER</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        <!--====== Favicon Icon ======-->
        <link
          rel="shortcut icon"
          href="/Applications/MAMP/htdocs/play-bootstrap/assets/images/logo/logo-2.svg"
          type="image/svg"
        />
    
        <!-- ===== All CSS files ===== -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/lineicons.css" />
        <link rel="stylesheet" href="assets/css/ud-styles.css" />
      </head>
<!-- ====== Header====== -->

<?php 

// Test si l'utilisateur est déjà connecté
if (isset($_SESSION['connect'])){
    header('location: Projet-Annuel\FRONT\index.php');
    exit();
}
// sinon inscription
require('./config.php');

    // si tous les champs existent et ne sont pas nuls
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])){
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_confirm = $_POST['password_confirm'];

        // Test égalité des mdp
        if ($password != $password_confirm){
            header('location: ./inscription?error=1&pass=1');
            exit();
        }

        // Test dispo adresse mail
        $resultat= $dbh -> prepare('SELECT count(*) as top_email FROM users WHERE email=?');
        $resultat -> execute(array($email));
        while ($email_verif = $resultat->fetch()) {
            if($email_verif['top_email'] != 0){
                header('location: ./inscription?error=1&mail=1');
                exit();
            };
        }

        // Hash key
        $secret = sha1($email).time();
        $secret = sha1($secret).time().time();

        // Cryptage du mdp
        $password = "aq1".sha1($password."1254")."25";

        // Insertion nouvel utilisateur
        $resultat= $dbh -> prepare('INSERT INTO users(pseudo, email, pwd_user, key_user) VALUES (?, ?, ?, ?)');
        $resultat -> execute(array($pseudo, $email, $password, $secret));

        header('location: ./inscription?success=1');
        exit();

    }
?>

<div class="mainsignup">
        <section class="signup">
          <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
            <h1 class="singtitle"><?php echo $lang['contact']; ?>
                <!--  Sign-Up  -->
            </h1>
          </div>
            <div class="contentsignup">
                <div class="signup-content">
                <?php
        // Contrôle des erreurs
        if (isset($_GET['error'])){

            if (isset($_GET['pass'])){
                echo '<p class="alert alert-warning" role="alert"><i class="fas fa-info-circle"></i> Les mots de passe ne sont pas identiques </p>';
            } else if (isset($_GET['mail'])){
                echo '<p class="alert alert-warning" role="alert"><i class="fas fa-info-circle"></i> Cette adresse email est déjà utilisée </p>';
            }

        } else if (isset($_GET['success'])){
            echo '<p class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Inscription validée ! Vous pouvez vous connecter </p>';
        }

    ?>

    <script src="https://kit.fontawesome.com/XXXXX.js"></script>
                    
    <form method="POST" action="inscription.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Email :</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="pseudo">Pseudo :</label>
                <input type="text" class="form-control" name="pseudo" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Mot de passe :</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group col-md-6">
                <label for="password_confirm">Confirmez le mot de passe :</label>
                <input type="password" class="form-control" name="password_confirm" placeholder="Password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>

    <script src="https://kit.fontawesome.com/XXXXX.js"></script>
                    <p class="loginhere">
                       <?php echo $lang['terms3']; ?>
                <!--  Vous avez déjà un compte ?  --> <a href="/Projet-Annuel\FRONT\login.php" class="loginhere-link"><?php echo $lang['terms4']; ?>
                <!--  Connectez-vous ici  --></a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
<!-- ====== Header End ====== -->