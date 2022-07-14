<?php
include __DIR__."/../models/userModel.php";
//Redirection vers les differentes fonctions des paramètres

//Connexion depuis le shop
if (count($_POST) == 3 && !empty($_POST["email"]) && !empty($_POST["pwd"])) {
    $result = Login::connexion($_GET["route"]);
}elseif(!empty($_POST["quantity"]) ){
    $_SESSION["products"]["quantity_order"]  = $_POST["quantity"];
}elseif (count($_POST) == 2 && !empty($_POST["email"]) && !empty($_POST["pwd"])) {
    $result = Login::connexion($_GET["route"]);
}elseif (!empty($_GET["end"])){
    Login::delete;

}else{
    $errors[]= "Veuillez remplir le formulaire.";
    $_SESSION["errors"]= $errors;
//    if ($_GET["route"] == "sign-in") {
//        header("Location: sign-in");
//    } else {
//        header("Location: connexion");
//    }
}
class Login
{
    public static function connexion($route)
    {
        try {
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
            $quantity_order = $_POST["quantity"];
            /*if (isset($_POST['submited'])) {
                //rememberme
                //Si la case est cochée
                if($_POST['rememberme']) {
                    //On set 2 cookies un pour l'utilisateur et un pour le mot de passe

                    //le nom du cookie "remembermeu" la valeur "$username" et la durée "time() + 31536000"
                    setcookie('remembermem', $email, time() + 31536000);

                    //le nom du cookie "remembermep" la valeur "$password" et la durée "time() + 31536000"
                    setcookie('remembermep', $pwd, time() + 31536000);

                }
                //Si la case est décochée
                elseif(!$_POST['submited']) {

                    //On cherche pour nos 2 cookies
                    if (isset($_COOKIE['remembermem'], $_COOKIE['remembermep'])) {
                        //Nous les plaçons comme si ils avaient expirés
                        $past = time() - 100;
                        setcookie(remembermeu, gone, $past);
                        setcookie(remembermep, gone, $past);
                    }
                }
            }*/
            $result = UserModel::findByEmail($email);
            if (empty($result)) {
                $errors[] = "Identifiants incorrects.";
                $_SESSION["errors"] = $errors;
                if ($route == "sign-in") {
                    header("Location: sign-in");
                } else {
                    header("Location: connexion");
                }

            } else {
                if (password_verify($pwd, $result["passwd"])) {
                    $token = bin2hex(random_bytes(16));
                    $_SESSION["user"] = UserModel::updateOneById($result["idUser"], ["token" => $token]);
                    $user = UserModel::getOneByToken($token);
                    $_SESSION["user"] = $user;
                    $_SESSION["products"]["quantity_order"]  = $quantity_order;
                    if ($route == "connexion") {
                        header("Location: userprofil");
                    }
                    elseif($route==="payment") {
                        header("Location: payment");
                        var_dump( $_SESSION["user"]);
                    } else{
                        header("Location: dashboard");

                    }
                } else {

                        $errors[] = "Identifiant ou mot de passe incorrects.";
                        $_SESSION["errors"] = $errors;
                    if ($route == "sign-in") {
                        header("Location: sign-in");
                    } else {
                        header("Location: connexion");
                    }
                }
                }
            }
         catch(PDOException $e){
                $e->getMessage();
            }
    }
    public static function logout($route)
    {
        UserModel::logout();
        if ($route == "connexion") {
            header("Location: connexion");
        } else {

            header("Location: sign-in");
        }    }


}