</main>

    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-3">
                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
                <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
        <script src="view/Profil/assets/js/core/popper.min.js"></script>
        <script src="view/Profil/assets/js/core/bootstrap.min.js"></script>
        <script src="view/Profil/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="view/Profil/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="view/Profil/assets/js/material-dashboard.min.js?v=3.0.4"></script>

        <!-- script reservation -->

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
<script>
$(document).ready(function() {
var userId = $("#user_id_input").val()
check_reservation(userId)

var map = L.map('map').setView([45.75580771887143, 4.835828819141278], 15);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 19,
attribution: '© OpenStreetMap'
}).addTo(map);

map.once('click', addMarker);

function addMarker(e) {
var newMarker = new L.marker(e.latlng, {
draggable: 'true'
}).addTo(map);
calculate_distance(e.latlng.lat, e.latlng.lng)

newMarker.on('dragend', function(event) {
var marker = event.target;
var position = marker.getLatLng();

marker.setLatLng(new L.LatLng(position.lat, position.lng), {
draggable: 'true'
});
map.panTo(new L.LatLng(position.lat, position.lng))
calculate_distance(position.lat, position.lng)
});
}

var markers = [];
var route = L.featureGroup();
var data = {
scooter: $("#selected_scooter").val()
}
$.ajax({
type: "POST",
dataType: "json",
url: "FRONT/mapping/mapping_functions.php",
data: data
}).done(function(obj) {
$("#origin_lat").val(obj.cur_lat)
$("#origin_lng").val(obj.cur_lng)
var marker = new L.Marker([obj.cur_lat, obj.cur_lng])
.on("click", function() {
set_reservation(obj.idScooter)
})
route.addLayer(marker);

// map.panTo(obj.cur_lat, obj.cur_lng);
});
map.addLayer(route);

function calculate_distance(lat, lng) {

var origin_lat = $("#origin_lat").val()
var origin_lng = $("#origin_lng").val()

var destination_lat = lat
var destination_lng = lng

var url = 'http://router.project-osrm.org/route/v1/bike/' + origin_lng + ',' + origin_lat + ';' + destination_lng + ',' + destination_lat + '?overview=false';


$.getJSON(url, function(data) {
var distance = parseFloat(data.routes[0].distance / 1000).toFixed(2)
$("#distance").text('Aproximate Distance: ' + distance + ' Km.')
var duration = parseInt(data.routes[0].duration)
var calc_duration = new Date(duration * 1000).toISOString().substr(11, 8);
$("#duration").text('Aproximate Duration: ' + calc_duration + '.')
var minutos = Math.floor(duration / 60);
var costo = minutos * 0.23
var costo_total = costo + 1
$("#cost").html('Aproximate Cost &euro;: ' + costo_total.toFixed(2) + '.')
$("#sccoter_lat_input").val(origin_lat)
$("#sccoter_lng_input").val(origin_lng)
$("#result_block").css('display', 'block')
});

}

$("#confirm_reservation_btn").on('click', function() {
$("#confirm_reservation_btn").prop('disabled', true);
var scooter = $("#sccoter_id_input").val()
var origin_lat = $("#sccoter_lat_input").val()
var origin_lng = $("#sccoter_lng_input").val()

var data = {
scooter: scooter,
origin_lat: origin_lat,
origin_lng: origin_lng,
userId: userId
}

$.ajax({
type: "POST",
dataType: "json",
url: "FRONT/mapping/reservation_process.php",
data: data
}).done(function(rsp) {
console.log(rsp)
$("#step_1").css('display', 'none')
$("#step_2").css('display', 'block')
start_timer(0)
});
})

function start_timer(seconds) {
var minutesLabel = document.getElementById("minutes");
var secondsLabel = document.getElementById("seconds");
var totalSeconds = seconds;
setInterval(setTime, 1000);



function setTime() {
++totalSeconds;
secondsLabel.innerHTML = "<h1>" + pad(totalSeconds % 60) + "</h1>";
minutesLabel.innerHTML = "<h1>" + pad(parseInt(totalSeconds / 60)) + "</h1>";
}

function pad(val) {
var valString = val + "";
if (valString.length < 2) {
return "0" + valString;
} else {
return valString;
}
}
}

function check_reservation(userId) {
var data = {
userId: userId
}

$.ajax({
type: "POST",
dataType: "json",
url: "FRONT/mapping/check_reservation.php",
data: data
}).done(function(rsp) {
if (rsp.seconds) {
$("#step_1").css('display', 'none')
$("#step_2").css('display', 'block')
$("#reservation_id").val(rsp.idRide)
start_timer(parseInt(rsp.seconds))
}
});
}

$("#stop_reservation_btn").on('click', function(){
var reservation_id = $("#reservation_id").val()
$.ajax({
type: "POST",
dataType: "json",
url: "FRONT/mapping/close_reservation.php",
data: {idRide: reservation_id}
}).done(function(rsp) {
$("#total_charge").html(rsp.cost)
$("#total_points").html(rsp.total_points)
$("#step_2").css('display', 'none')
$("#step_3").css('display', 'block')
});
})
})
</script>
</body>

</html>