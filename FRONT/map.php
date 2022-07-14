<?php
include __DIR__ .'\fb.php';
include __DIR__ . '\include\app.php';
include __DIR__ . '\include\menu.php';
?>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
<style>
#map {
height: 680px;
}
</style>


<!-- ====== Pricing Start ====== -->
<section id="pricing" class="">
<div class="container-fluid">
<div class="row mt-3">
<div class="col">
<div id="map">
</div>
</div>
</div>
</section>

<?php
if(isset($_SESSION['connect']) && $_SESSION['connect'] === 1){
?>
<div class="modal" tabindex="-1" id="modal_reserve">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Louer un scooter <span id="monopatin_id"></span></h5>
<button type="button" class="btn-close cerrar" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<p>Km parcourus: <span id="scooter_km"></span></p>
<p>% batterie actual: <span id="scooter_bat"></span></p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary cerrar" data-bs-dismiss="modal_reserve">Fermer</button>
<form method="POST" action="view/Profil/pages/reservation.php">
<input type="hidden" id="scooter_id" name="scooter_id">
<button class="btn btn-primary" id="confirm_reservation" >Louer</button>
</form>
</div>
</div>
</div>
</div>
<?php
} else {
?>
<div class="modal" tabindex="-1" id="modal_reserve">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Vous devez être connecté</h5>
<button type="button" class="btn-close cerrar" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<a class="ud-main-btn ud-white-btn" href="FRONT/sign-up.php" ><?php echo $lang['menu5']; ?><!-- S'inscrire --></a>
</div>

</div>
</div>
</div>


<?php
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script>
$(document).ready(function() {
var map = L.map('map').setView([45.75580771887143, 4.835828819141278], 13);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '© OpenStreetMap'
}).addTo(map);
var markers = [];
var route = L.featureGroup();
var data = {
scooter: 0
}
$.ajax({
type: "POST",
dataType: "json",
url: "FRONT/mapping/mapping_functions.php",
data: data
}).done(function(rsp) {
rsp.forEach(function(obj) {

var marker = new L.Marker([obj.cur_lat, obj.cur_lng])
.on("click", function() {
set_reservation(obj.idScooter, obj.km)

})
route.addLayer(marker);
});
});
map.addLayer(route);

function set_reservation(scooter,km){
var bat = Math.floor(Math.random() * 100);
$("#monopatin_id").text(scooter)
$("#scooter_km").text(km)
$("#scooter_bat").text(bat)
$("#scooter_id").val(scooter)
$("#modal_reserve").show()
}
$(".cerrar").on('click', function(){
$("#modal_reserve").hide()
})
$("#confirm_reservation").on('click', function(){
console.log($("#scooter_id").val())

})
})
</script>

</body>

</html>