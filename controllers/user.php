<?php
include __DIR__ . "/../models/userModel.php";
if (isset($_POST["subject"],$_POST["id"])) {
    $id_user = $_POST["id"];
    $recupdonnee = $_POST["subject"];
    User::status($id_user, $recupdonnee);
}
if (
    isset($_POST["firstname"]) ||
    isset($_POST["lastname"]) ||
    isset($_POST["email"]) ||
    isset($_POST["phone"]) ||
    isset($_POST["pwd"]) ||
    isset($_POST["confirmpwd"]) ||
    isset($_POST["forfait"]) ||
    count($_POST) == 7
) {
    //récupérer les données du formulaire
    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $pwd = $_POST["pwd"];
    $pwdConfirm = $_POST["confirmpwd"];
    $forfait = $_POST["forfait"];
    $phone = $_POST["phone"];
    $status="user";

    User::create($firstname, $lastname,  $email,  $phone, $pwd,  $pwdConfirm, $forfait,$status);
}
if(isset($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["phone"])&& count($_POST) == 4) {

    $email = strtolower(trim($_POST["email"]));
    $firstname = ucwords(strtolower(trim($_POST["firstname"])));
    $lastname = mb_strtoupper(trim($_POST["lastname"]));
    $phone = $_POST["phone"];
    $status="Admin";
    $newUser = User::addUser($firstname, $lastname, $phone,$email,$status);

}

if (isset($_GET["delete"],$_GET["id"])) {
    $idScooter = $_GET["id"];
    $action= $_GET["delete"];
    Scooter::delete($idScooter);
}
//if (
//    !isset($_POST["firstname"]) ||
//    !isset($_POST["lastname"]) ||
//    empty($_POST["email"]) ||
//    empty($_POST["phone"]) ||
//    empty($_POST["password"]) ||
//    empty($_POST["passwordConfirm"]) ||
//    empty($_POST["cgu"]) ||
//    count($_POST) != 7
//) {
//    echo " vide";
//    $errors = [];
//    $errors="Veuillez remplir le formulaire";
//    $_SESSION["errors"]=$errors;
//    header("Location: sign-up");
//}


class User
{
    /**
     * @example
     * User::get();
     */
    public static function get()
    {
        $users = UserModel::getAll();
        include __DIR__ .'/../view/adminDash/tables.php';
    }

    public static function status(int $id, int $recupdonnee): void
    {
        if ($recupdonnee == 3) {
            try {
                $status = UserModel::deleteUser($id);
                header("Location: ../usermana");
            } catch (PDOException $exception) {
                $exception->getMessage();
            }
        } else {
            try {
                $status = UserModel::updateOneById($id,["state" => $recupdonnee]);
                header("Location: ../usermana");


            } catch (PDOException $exception) {
                $exception->getMessage();
            }
        }
    }

    public static function create(string $firstname, string $lastname, string $email, int $phone, string $pwd, string $pwdConfirm, string $forfait, string $status)
    {
        try {
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
//            if (!preg_match('/^0[1-68]([-. ]?[0-9]{2}){4}/', $phone)) {
//                $errors[] = 'Numéro de téléphone pas valide';
//            }
//                //Vérification l'unicité de l'email
                $findPhone = UserModel::findByPhone($phone);
                if (!empty($findPhone)) {
                    $errors[] = "Numéro de téléphone est déjà utilisé";
                }
            $pwd = password_hash($pwd, PASSWORD_DEFAULT);
            var_dump($errors);
            var_dump($_POST);
            if (count($errors) == 0) {
                $newUser = UserModel::create([
                    "firstname" => $firstname,
                    "lastname" => $lastname,
                    "phone" => $phone,
                    "email" => $email,
                    "pwd" => $pwd,
                    "subscription" => $forfait,
                    "status_user" => $status
                ]);
                if ($newUser == 1) {
                    $result = UserModel::findByEmail($email);
                    if (!$result) {
                        $_SESSION["result"] = $result;
                        header("Location: sign-up");
                    } else {
                        $token = bin2hex(random_bytes(16));
                        $result =UserModel::updateOneById($result["idUser"], ["token" => $token]);
                        $user = UserModel::getOneByToken($token);
                        $_SESSION["user"] = $user;
                        header("Location: userprofil");
                    }
                }
            }else{
                $_SESSION["errors"] = $errors;
                header("Location: sign-up");

            }
        }catch (PDOException $exception){
            $errors[] = $exception->getMessage();
            $_SESSION["errors"] = $errors;
            header("Location: sign-up");
        }
    }

    public static function addUser( $firstname,$lastname,$phone,$email,$status){
//        $firstname,$lastname,$phone,$email
//        print_r($user);
        $errors[]=User::formverfication(["firstname" => $firstname,
            "lastname" => $lastname,
            "phone" => $phone,
            "email" => $email,
            ]);
        if (count($errors) == 0){
        $newUser = UserModel::addUser([
            "firstname" => $firstname,
            "lastname" => $lastname,
            "phone" => $phone,
            "email" => $email,
            "status_user" => $status,
        ]);
        }else{
            print_r($errors);
        }

    }


}

        
    

