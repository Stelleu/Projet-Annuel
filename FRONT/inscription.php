<?php
//include __DIR__ .'include/fb.php';
include __DIR__ .'include/app.php';
include __DIR__ .'include/menusingup.php';
$title = "Inscription"
?> 

<?php 
// Test si l'utilisateur est déjà connecté
//if (isset($_SESSION['connect'])){
//    header('location: Projet-Annuel\FRONT\index.php');
//    exit();
//}
//
//        header('location: ./inscription?success=1');
//        exit();
//
//    }
?>

    <?php
        // Contrôle des erreurs
//        if (isset($_GET['error'])){
//
//            if (isset($_GET['pass'])){
//                echo '<p class="alert alert-warning" role="alert"><i class="fas fa-info-circle"></i> Les mots de passe ne sont pas identiques </p>';
//            } else if (isset($_GET['mail'])){
//                echo '<p class="alert alert-warning" role="alert"><i class="fas fa-info-circle"></i> Cette adresse email est déjà utilisée </p>';
//            }
//
//        } else if (isset($_GET['success'])){
//            echo '<p class="alert alert-success" role="alert"><i class="fas fa-info-circle"></i> Inscription validée ! Vous pouvez vous connecter </p>';
//        }

    ?>

    <form method="POST" action="inscription">
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
</body>
</html>
