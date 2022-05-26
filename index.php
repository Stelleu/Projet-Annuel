<?php
session_start();
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
        echo "cc";
        include "controllers/scooter.php";
        if ($method === "GET") {
            Scooter::get();
        }
        break;
//<<<<<<< HEAD


//    case "usermane":
//        include "controllers\user.php";
//        break;
//=======

    case "tables":
        echo $method;
        echo "cc";
        include "controllers/user.php";
        if ($method === "GET") {
            $title= "Utilisateurs";
            echo "je rentre ici";
            User::get();
        }
        break;


    case "sign-in" :

        if ($method === "GET") {
            $title = "Connexion";
            include "view/adminDash/sign-in.php";
        }
        if ($method === "POST") {
            include "controllers\Login.php";
        }
        break;

        case "sign-up":
            if ($method === "GET") {
                $title ='Inscription';
                include "view/adminDash/sign-up.php";
            }
            if ($method === "POST") {
                include "controllers/user.php";
            }
            break;

    case "dash":
        include "view/adminDash/dash.php";

        break;

    case "login":
        if ($method === "GET"){
            include "controllers/Login.php";
            Login::logout();
        }

        if ($method ==="POST"){
            include "controllers/Login.php";
        }
        break;

    case "profile":
        if ($method === "GET"){
            include "view/adminDash/profile.php";
        }
        break;

}


    

// Modifier les chemins d'inclusions pour utiliser un chemin correct avec __DIR__

// Toutes les routes (sauf login) doivent rendre l'authentification obligatoire
// Toutes les routes (sauf login) il n'y ait que l'utilisateur ayant le role ADMINISTRATOR qui puisse envoyer des requêtes

// Vous vérifiez que tous les paramètres soient corrects
// Email -> vérifier qu'il existe, qu'il ait un bon format
// Prénom -> vérifier qu'il existe, qu'il ait une taille similaire à ce qu'on a mis sur le fichier initialization.sql

// Récupérer les erreurs PDO est les afficher avec une réponse json lorsque possible