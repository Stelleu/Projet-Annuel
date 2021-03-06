<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


/**
 * @see https://www.php.net/manual/en/migration70.new-features.php#migration70.new-features.null-coalesce-op
 */
$route = isset($_REQUEST["route"]) ? $_REQUEST["route"] : "";

/**
 * @see https://www.php.net/manual/en/reserved.variables.server.php
 */
$method = $_SERVER['REQUEST_METHOD'];

switch ($route) {

    case "dashboard":
        include "view/adminDash/dashboard.php";
        break;
        case "dash":
            include "controllers/user.php";

            break;
    case "scootermana":
        include "controllers/scooter.php";
        if ($method === "GET") {
            Scooter::get();
        }
        break;
//<<<<<<< HEAD
    case "usermane":
        include "controllers\user.php";
//=======
    case "usermana":
        include "controllers/user.php";
//>>>>>>> pre-prod
        if ($method === "GET") {
            User::get();
        }
        break;

    case "sign-in" :
        echo "cc";

        if ($method === "GET") {
            $title = "Connexion";
            header('Location:  adminTemplate/pages/sign-in.php');
        }
        if ($method === "POST") {
            include "controllers\Login.php";
            echo "cc";
            if (count($_POST) == 2 && !empty($_POST["email"]) && !empty($_POST["pwd"])) {
                echo "cc";

                $result = Login::connexion();
            }
        }
        break;

        case "sign-up":
            if ($method === "GET") {
                $title ='Inscription';
                header('Location: view/adminDash/sign-up.php');

            }
            if ($method === "POST") {
                include "controllers/user.php";
                if (
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

                } else {

                    //r??cup??rer les donn??es du formulaire
                    $email = $_POST["email"];
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $pwd = $_POST["password"];
                    $pwdConfirm = $_POST["passwordConfirm"];
                    $cgu = $_POST["cgu"];
                    $phone = $_POST["phone"];
                    $user=User::create($firstname, $lastname,  $email,  $phone, $pwd,  $pwdConfirm);
                    include_once "view/adminDash/dash.php";
//                    header('Location:http://localhost/Projet-Annuel/view/adminDash/dash.php');

                }

            break;
            }
    case "tables":

}


    
/**switch($route): 
    case 'users':
        echo "cc  je rentre";
        include "./controllers/user.php";
    
        if ($method === "GET") {
            user::get();
            
        }
        
    break;

    default: 
     include __DIR__ . "\PA\controllers\user.php";
    break;
endswitch;
*/

// Modifier les chemins d'inclusions pour utiliser un chemin correct avec __DIR__

// Toutes les routes (sauf login) doivent rendre l'authentification obligatoire
// Toutes les routes (sauf login) il n'y ait que l'utilisateur ayant le role ADMINISTRATOR qui puisse envoyer des requ??tes

// Vous v??rifiez que tous les param??tres soient corrects
// Email -> v??rifier qu'il existe, qu'il ait un bon format
// Pr??nom -> v??rifier qu'il existe, qu'il ait une taille similaire ?? ce qu'on a mis sur le fichier initialization.sql

// R??cup??rer les erreurs PDO est les afficher avec une r??ponse json lorsque possible