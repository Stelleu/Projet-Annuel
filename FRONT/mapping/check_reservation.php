<?php
include("map_class.php");

extract($_POST);

$res = $mp->get_reservation($userId);

echo json_encode($res);