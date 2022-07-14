<?php
include("map_class.php");

extract($_POST);
if($scooter === "0"){
    $scooters = $mp->get_scooters();
    echo json_encode($scooters);
} else {

    $scooters = $mp->get_this_scooter($scooter);
    echo json_encode($scooters);
}
