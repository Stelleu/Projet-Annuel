<?php

class Login
{
    public static function connexion()
    {
        try {

            //password_verify
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
            $result=UserModel::findByEmail($email);
            if(!$result){
                return;
            }
            else if(!password_verify($pwd, $result["passwd"]) && $result["status_user"]=="Admin"){
                return ;
            }
            $token = bin2hex(random_bytes(16));
            UserModel::updateOneById($result["id"], ["token" => $token]);
            header("Location: ../adminTemplate/pages/dashboard.html");
            print_r($result);

            if (empty($result)){
                header("Location: http://127.0.0.1/Projet-Annuel/adminTemplate/pages/formsign-up.php");
                echo '<div style="background-color:#ad5555; color: white; padding: 10px; margin: 10px; ">Identifiants incorrects</div>';
            }




        } catch (PDOException $exception){
            $exception->getMessage();
        }


    }
}