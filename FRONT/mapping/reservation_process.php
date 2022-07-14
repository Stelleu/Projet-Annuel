<?php
include("map_class.php");

extract($_POST);

$res = $mp->set_reservation($scooter,$origin_lat,$origin_lng,$userId);

echo json_encode($res);