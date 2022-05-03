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

include "controllers\user.php";
    
        if ($method === "GET") {
            User::get();
        }




        /*
         * if($route == connexion){
         * User::connexion($email, $pwd);
         * include "controllers\user.php";
         * }
         * */
    
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