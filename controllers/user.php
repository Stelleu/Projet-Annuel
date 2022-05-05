<?php
include __DIR__."\..\models\UserModel.php";

if (isset($_POST["subject"],$_POST["id_user"])) {
    $id_user = $_POST["id_user"];
    $recupdonnee=$_POST["subject"];
    User::status($id_user, $recupdonnee);
}

/*if (
    !isset($_POST["firstname"]) ||
    !isset($_POST["lastname"]) ||
    empty($_POST["email"]) ||
    empty($_POST["phone"]) ||
    empty($_POST["password"]) ||
    empty($_POST["passwordConfirm"]) ||
    empty($_POST["cgu"]) ||
    count($_POST) != 7
) {

    die("Tentative de Hack ...");

}else{

    //récupérer les données du formulaire
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $pwd = $_POST["password"];
    $pwdConfirm = $_POST["passwordConfirm"];
    $cgu = $_POST["cgu"];
    $phone = $_POST["phone"];

    User::create($firstname, $lastname,  $email,  $phone, $pwd,  $pwdConfirm);

}*/



class User
{
    /**
     * @example
     * User::get();
     */

    public static function get()
    {
        $users = UserModel::getAll();
        include 'view\userlist.php';
    }

    public static function status(int $id, int $recupdonnee)
    {
        echo $recupdonnee;
        if ($recupdonnee == 3) {
            try {
                /*$status = UserModel::deleteUser($id);
                include 'view\userlist.php';
*/

            } catch (PDOException $exception) {
                $exception->getMessage();
            }
        } else {
            try {
                echo "ccc";
                $status = UserModel::updateUser($id, $recupdonnee);
                include 'view\userlist.php';


            } catch (PDOException $exception) {
                $exception->getMessage();
            }
        }
    }

    public static function create(string $firstname, string $lastname, string $email, string $phone, string $pwd, string $pwdConfirm)
    {
//nettoyer les données

        $email = strtolower(trim($email));
        $firstname = ucwords(strtolower(trim($firstname)));
        $lastname = mb_strtoupper(trim($lastname));
//vérifier les données
        $errors = [];
//Email OK
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email incorrect";
        } else {

            //Vérification l'unicité de l'email
            $user = UserModel::findByEmail($email);
            if (!empty($user)) {
                $errors[] = "L'email existe déjà en bdd";
            }
        }
//prénom : Min 2, Max 45 ou empty
        if (strlen($firstname) == 1 || strlen($firstname) > 45) {
            $errors[] = "Votre prénom doit faire plus de 2 caractères";
        }

//nom : Min 2, Max 100 ou empty
        if (strlen($lastname) == 1 || strlen($lastname) > 100) {
            $errors[] = "Votre nom doit faire plus de 2 caractères";
        }
//Mot de passe : Min 8, Maj, Min et chiffre
        if (strlen($pwd) < 8 ||
            preg_match("#\d#", $pwd) == 0 ||
            preg_match("#[a-z]#", $pwd) == 0 ||
            preg_match("#[A-Z]#", $pwd) == 0
        ) {
            $errors[] = "Votre mot de passe doit faire plus de 8 caractères avec une minuscule, une majuscule et un chiffre";
        }
//Confirmation : égalité
        if ($pwd != $pwdConfirm) {
            $errors[] = "Votre mot de passe de confirmation ne correspond pas";
        }
        if (!preg_match(' /^0[0-9]([-. ]?[0-9]{2}){4}$/', $phone)) {
            $errors[] = 'Numéro de téléphone pas valide';
            //Vérification l'unicité de l'email
            $user = UserModel::findByPhone($phone);
            if (!empty($user)) {
                $errors[] = "Numéro de téléphone existe déjà en bdd";
            }
        }

        print_r($errors);

        if (count($errors) == 0) {
            $pwd = password_hash($pwd, PASSWORD_BCRYPT);
            UserModel::create([
                "firstname" => $firstname,
                "lastname" => $lastname,
                "phone" => $phone,
                "email" => $email,
                "pwd" => $pwd,
            ]);
            header("Location: ../adminTemplate/pages/formsign-up.php");
        }
    }
    public static function connexion()
    {
            //Afficher OK si les identifiants sont bons sinon afficher NOK
            //password_verify
            echo "COUCOU";
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
             if (isset($_POST['submited'])) {
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
             }
        $result=UserModel::connect($email,$pwd);
        print_r($result);
       if (empty($result) || $result=0){
           header("Location: http://127.0.0.1/Projet-Annuel/adminTemplate/pages/formsign-up.php");
           echo '<div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">Identifiants incorrects</div>';
       }

    }
}

        
    

