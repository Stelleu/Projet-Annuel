<?php
include __DIR__."/../models/scooterModel.php";

/** Test de fonctionnement
if(!empty($_POST['delete'])) {
    echo "Delete ok " . $_POST['delete']. " " . $_POST["id"];
}else {
    echo "Delete vide";
}**/
//ajax

//
if(isset($_POST["number"],$_POST["condition"],$_POST["status"],$_POST["workzone"])) {
    $numberScooter = htmlspecialchars($_POST["number"]);
    $conditionScooter = $_POST["condition"];
    $statusScooter = htmlspecialchars($_POST["status"]);
    $workzoneScooter = htmlspecialchars($_POST["workzone"]);

    Scooter::addScooter($numberScooter, $conditionScooter, $statusScooter, $workzoneScooter);
}

if (isset($_GET["delete"],$_GET["id"])) {
    $idScooter = $_GET["id"];
    $action= $_GET["delete"];
    Scooter::delete($idScooter);
}

class Scooter
{
    public static function get()
    {
        $scooters = scooterModel::getAll();
        include __DIR__ . '/../view/adminDash/scooterma.php';
    }

    public static function delete(int $id){
        scooterModel::deleteScooter($id);
        header("Location: scootermana");
    }

    public static function addScooter(int $number,int $condition, int $status, int $workzone ){


        switch ($workzone){
            case 1:
                $workzoneLabel = "Nation";
                break;
            case 2:
                $workzoneLabel = "Gare de Lyon";
                break;
            case 3:
                $workzoneLabel = "Gare du Nord";
                break;
            case 4:
                $workzoneLabel = "Gare de Montparnasse";
                break;
        }

        scooterModel::addScooter($number,$condition,$status,$workzoneLabel);
        header("Location: ../scootermana");
    }
}




