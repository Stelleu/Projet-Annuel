<?php
include("/home2/gutibs23/public_html/scooters/FRONT/mapping/map_class.php");

extract($_POST);

$res = $mp->close_reservation($idRide);

echo json_encode($res);