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
    case "home":
        include "FRONT/index.php";
        break;

    case "contact":
        include "FRONT/contact.php";
        break;

    case "commentçamarche":
        include "FRONT/commentçamarche.php";
        break;

    case "sign-up":
        include "FRONT/sign-up.php";
        if ($method ==="POST"){
            include "controllers/user.php";
        }
        break;

    case "connexion":
        include "FRONT/longin.php";
        if ($method == "POST"){
            include "controllers/Login.php";
        }
        break;
    case "userprofil":
        if ($method === "GET"){
            include "controllers/Profil.php";
            Profil::getAll();
        }
        break;

    case "dashboard":
        include "view/adminDash/dashboard.php";
        break;

    case "scootermana":
        include "controllers/scooter.php";
        if ($method === "GET") {
            Scooter::get();
        }
        break;
    case "billing":
        //espace de facturation
        if ($method === "GET"){
            include "controllers/Profil.php";
            Profil::getAll();
        }
        break;


    case "tables":
//        include "controllers/user.php";
        $title= "Utilisateurs";
//        include "view/adminDash/tables.php";
        if ($method === "GET") {
        include "controllers/user.php";
            User::get();
        }
        break;

    case "pricing":
        include "view/adminDash/pricing.php";

        break;

        case "newoffer":
        include "view/adminDash/test.php";
            if ($method === "GET") {
                $title = "Nouvelle Offre";
            }
            if ($method === "POST") {
                include "controllers\Forfait.php";
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
    case "forfaits":
        include "controllers/";
        break;
    case "success":
        include "view/shop/success.php";
        if ($method ==="GET"){
            include "controllers/Invoice.php";
        }
        break;

    case "checkout":
        if ($method === "GET") {
            include "controllers/Shop.php";
            Shop::getByIds();
        }
        if ($method ==="POST"){
            include "controllers/Shop.php";
        }
        break;
    case "payment":
        include "view/shop/create-checkout-session.php";
//        if ($method === "POST") {
//            include "controllers/Login.php";
//        }
////        if ($method === "GET"){
////            include "controllers/Invoice.php";
////
////        }
        break;

    case "shop":
//        include "view/shop/shopping.php";
        if ($method === "GET") {
            include "controllers/Shop.php";
            Shop::getAll();
        }if ($method === "POST") {
        include "controllers/Shop.php";
    }
        break;
    case "Forfait":
        include "view/Forfait.php";
        /*        if ($method === "GET") {
                    include "controllers/Forfait.php";
                    //Forfait::getForfait();
                }*/
        break;
    case "article":
        include "view/shop/single-product.php";
        if ($method === "POST") {
            include "controllers/Shop.php";
        }
        if ($method === "GET") {
            include "controllers/Shop.php";
        }
        break;

        /* added gutibs */
        case "map":
        include "FRONT/map.php";
        break;
        /* added gutibs */
}


    

// Modifier les chemins d'inclusions pour utiliser un chemin correct avec __DIR__

// Toutes les routes (sauf login) doivent rendre l'authentification obligatoire
// Toutes les routes (sauf login) il n'y ait que l'utilisateur ayant le role ADMINISTRATOR qui puisse envoyer des requêtes

// Vous vérifiez que tous les paramètres soient corrects
// Email -> vérifier qu'il existe, qu'il ait un bon format
// Prénom -> vérifier qu'il existe, qu'il ait une taille similaire à ce qu'on a mis sur le fichier initialization.sql

// Récupérer les erreurs PDO est les afficher avec une réponse json lorsque possible