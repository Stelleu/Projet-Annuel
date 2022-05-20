<?php
include __DIR__."/../models/userModel.php";


class Login
{
    public static function connexion()
    {
        try {
            //password_verify
            $email = $_POST["email"];
            $pwd = $_POST["pwd"];
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
            if(empty($result)){
                $errors = "Identifiants incorrects";
            }else {
                if (password_verify($pwd, $result["passwd"])) {
                    $token = bin2hex(random_bytes(16));
                    $_SESSION["token"] = UserModel::updateOneById($result["idUser"],["token"=> $token]);
                    $_SESSION["idUser"]=$result["id"];
                    $_SESSION["email"]=$result["email"];
                } else {
                    echo 'Le mot de passe est invalide.';
                }

            }
            //            if (!$result || $result["status_user"] != "Admin") {
//                echo "probleme";
//                $_SESSION["result"] = $result;
////                header("Location: ../adminTemplate/pages/sign-in.php");
//            } else {
//
//                if (password_verify($pwd, $result["passwd"])) {
//                    echo "31";
//                    $token = bin2hex(random_bytes(16));
//                    UserModel::updateOneById($result["idUser"], ["token" => $token]);
//                    $_SESSION["info"] = UserModel::getOneByToken($token);
//                    echo "1";
////                header("Location: ../view/adminDash/dash.php");
//                }
//            }
        }catch (PDOException $e){
                $e->getMessage();
            }
    }
    public static function logout(){
        UserModel::logout();
    }

}