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
    case "scootermana":
        include "controllers/scooter.php";
        if ($method === "GET") {
            Scooter::get();
        }
        break;
<<<<<<< HEAD
    case "usermane":
        include "controllers\user.php";
=======
    case "usermana":
        include "controllers/user.php";
>>>>>>> pre-prod
        if ($method === "GET") {
            User::get();
        }
        break;
    case "sign-in" :
        echo $method;
        if ($method === "GET") {
            echo "cc";
            $title = "Connexion";
            header('Location:  "adminTemplate/pages/sign-in.php"');
        }
        if ($method === "POST") {
            if (count($_POST) == 3 && !empty($_POST["email"]) && !empty($_POST["pwd"])) {
                Login::connexion();
            }
        }
        break;

        case "sign-up":
            if ($method === "GET") {
                $title ='Inscription';
                header('Location:adminTemplate/pages/sign-up.php');

            }
            if ($method === "POST") {
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

                    //récupérer les données du formulaire
                    $email = $_POST["email"];
                    $firstname = $_POST["firstname"];
                    $lastname = $_POST["lastname"];
                    $pwd = $_POST["password"];
                    $pwdConfirm = $_POST["passwordConfirm"];
                    $cgu = $_POST["cgu"];
                    $phone = $_POST["phone"];
                    User::create($firstname, $lastname,  $email,  $phone, $pwd,  $pwdConfirm);
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
// Toutes les routes (sauf login) il n'y ait que l'utilisateur ayant le role ADMINISTRATOR qui puisse envoyer des requêtes

// Vous vérifiez que tous les paramètres soient corrects
// Email -> vérifier qu'il existe, qu'il ait un bon format
// Prénom -> vérifier qu'il existe, qu'il ait une taille similaire à ce qu'on a mis sur le fichier initialization.sql

// Récupérer les erreurs PDO est les afficher avec une réponse json lorsque possible