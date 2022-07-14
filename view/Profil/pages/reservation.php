<!-- if(!isset($_SESSION['userId']) || $_SESSION['userId'] === ''){
$_SESSION['userId'] = 12;
} -->


?>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
<style>
#map {
height: 680px;
}
</style>
<div class="container-fluid py-4">
<div class="row">

<?php if (empty($_SESSION["user"])) {
} else { ?>
<div class="row ">
<h2>Bonjour, <?php echo $_SESSION["user"]["firstname"] ?></h2>
<div class=" col-xl-3 col-sm mb-xl-0 mb-4 text-end">
<p id="prenomprofile">
<?php echo $_SESSION["user"]["firstname"] ?>.<?php echo $_SESSION["user"]["lastname"] ?> - <?php echo $_SESSION["user"]["phone"] ?>
</p>
<p id="mailprofile">
<?php echo $_SESSION["user"]["email"];
} ?>
</p>
</div>

<div class="col-xl-3 col-sm mb-xl-0 mb-4">
<div class="icon icon-sm icon-shape bg-gradient-primary shadow-primary text-center border-radius ">
<i class="material-icons opacity-10">person</i>
</div>

</div>
<div class="row middle">
<?php if (isset($_SESSION["user"])) { ?>
<div class="col-4">
<a class="btn bg-gradient-primary mt-4 w-100" href="" type="button">se déconnecter</a>
</div>
<?php } ?>
</div>
<div id="step_1">
<div class="row mt-3 my-5" id="result_block" style="display:none">
<div class="col-3" id="distance"></div>
<div class="col-3" id="duration"></div>
<div class="col-3" id="cost"></div>
<div class="col-3" id="reservar">
<input type="hidden" id="sccoter_id_input" value="<?php echo $_POST['scooter_id']; ?>">
<input type="hidden" id="user_id_input" value="<?php echo $_SESSION['userId']; ?>">
<input type="hidden" id="sccoter_lat_input">
<input type="hidden" id="sccoter_lng_input">
<button id="confirm_reservation_btn" class="btn btn-primary">Confirmer</button>
</div>
</div>
<div class="row mt-3 my-5">
<div id="map"></div>
</div>
</div>

<div id="step_2" style="display:none">
<div class="row mt-3 my-5">
<h1>Votre location est en cours et votre temps de trajet est de :<label id="minutes">00</label>:<label id="seconds">00</label></h1>
<input type="hidden" id="reservation_id">
<button id="stop_reservation_btn" class="btn btn-primary">Returner Scooter</button>
</div>
</div>
<div id="step_3" style="display:none">
<div class="row mt-3 my-5">
<h2>Votre réservation a été clôturée et vous avez été facturé &euro; <span id="total_charge"></span></h2>
<h2>Vous avez gagné <span id="total_points"></span> point à votre portefeuille de points bonus.</h2>
</div>
</div>

</div>
</div>
</div>

<?php
include 'footer.php';
//include __DIR__ . '\include\menu.php';
?>