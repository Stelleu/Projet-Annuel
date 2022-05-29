<?php
$title= "Nouvelle Offre";
include __DIR__ . "/includes/header.php";;
?>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="mt-5">Créer votre nouvelle offre</h3>
                <h5 class="text-secondary font-weight-normal">Les informations relative à votre offre.</h5>
                <div class="multisteps-form mb-5">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto my-5">
                            <div class="multisteps-form__progress">
                                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">
                                    <span>Créer</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Address">
                                    <span>Durée</span>
                                </button>
                                <button class="multisteps-form__progress-btn" type="button" title="Order Info">
                                    <span>Supplément</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-8 m-auto">
                            <form class="multisteps-form__form">
                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Let's start with the basic information</h5>
                                            <p>Let us know your name and email address. Use an address you don't mind other users contacting you at</p>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-4">
                                                <div class="col-md mb-4">
                                                    <div class="card card-pricing">
                                                        <div class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative">
                                                            <div class="z-index-1 position-relative">
                                                                <h5 class="text-white" id="nom">Company</h5>
                                                                <h1 class="text-white mt-2 mb-0" id="output"> 779 </h1>
                                                            </div>
                                                        </div>
                                                        <div class="position-relative mt-n5" style="height: 50px;">
                                                            <div class="position-absolute w-100">
                                                                <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                                                                    <defs>
                                                                        <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                                                                    </defs>
                                                                    <g class="moving-waves">
                                                                        <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                                                                        <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                                                                        <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                                                                        <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                                                                        <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                                                                        <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="card-body text-center">
                                                            <ul class="list-unstyled max-width-200 mx-auto" id="offer">
                                                                <li>
                                                                    <b>10</b> Projects
                                                                    <hr class="horizontal dark">
                                                                </li>
                                                                <li>
                                                                    <b>1</b> Team Members
                                                                    <hr class="horizontal dark">
                                                                </li>
                                                                <li>
                                                                    <b>5</b> Personal Contacts
                                                                    <hr class="horizontal dark">
                                                                </li>
                                                                <li>
                                                                    <b>500</b> Messages
                                                                </li>
                                                            </ul>
                                                            <a href="javascript:;" class="btn bg-gradient-dark w-100 mt-4 mb-0">Activer l'offre </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-8 mt-4 mt-sm-0 text-start">
                                                <label>Nom de l'offre</label>
                                                <input class="multisteps-form__input form-control mb-3"  name="name" id="name" type="text" placeholder="Eg. Michael" />
                                                <label>Prix</label>
                                                <input class="multisteps-form__input form-control" type="number" id="price" placeholder="-10%" />
                                                <label>Description</label>
                                                <textarea class="multisteps-form__input form-control" type="text" id="description" placeholder="Description de l'offre"></textarea>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Quel sera la durée de validité de votre offre?</h5>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row mt-4">
                                            <div class="col-sm-3 ms-auto">
                                                <input type="checkbox" class="btn-check" id="btncheck1">
                                                <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                                        <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                                    </svg>
                                                </label>
                                                <h6>1 semaine</h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="checkbox" class="btn-check" id="btncheck2">
                                                <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck2">
                                                    <svg class="text-dark" width="20px" height="20px" viewBox="0 0 42 42" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <title>box-3d-50</title>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                                <g transform="translate(1716.000000, 291.000000)">
                                                                    <g transform="translate(603.000000, 0.000000)">
                                                                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z"></path>
                                                                        <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                                                        <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </label>
                                                <h6>1 mois</h6>
                                            </div>
                                            <div class="col-sm-3 me-auto">
                                                <input type="checkbox" class="btn-check" id="btncheck3">
                                                <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5" for="btncheck3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-calendar3" viewBox="0 0 16 16">
                                                        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                                        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                                    </svg>                                                </label>
                                                <h6>Sans durée</h6>
                                            </div>
                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                            <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                                    <div class="row text-center">
                                        <div class="col-10 mx-auto">
                                            <h5 class="font-weight-normal">Are you living in a nice area?</h5>
                                            <p>One thing I love about the later sunsets is the chance to go for a walk through the neighborhood woods before dinner</p>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__content">
                                        <div class="row text-start">
                                            <div class="col-12 col-md-8 ms-auto mt-3">
                                                <label>Street Name</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Eg. Soft" />
                                            </div>
                                            <div class="col-12 col-md-4 ms-auto mt-3">
                                                <label>Street No</label>
                                                <input class="multisteps-form__input form-control" type="number" placeholder="Eg. 221" />
                                            </div>
                                            <div class="col-12 col-md-7 ms-auto mt-3">
                                                <label>City</label>
                                                <input class="multisteps-form__input form-control" type="text" placeholder="Eg. Tokyo" />
                                            </div>
                                            <div class="col-12 col-md-5 ms-auto mt-3 text-start">
                                                <label>Country</label>
                                                <select class="form-control" name="choices-country" id="choices-country">
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Brasil">Brasil</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Prev</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="button" title="Send">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require_once('includes/footer.php');
        ?>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</main>
<div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg blur">
        <div class="card-header pb-0 pt-3  bg-transparent ">
            <div class="float-start">
                <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                <p>See our dashboard options.</p>
            </div>
            <div class="float-end mt-4">
                <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                    <i class="fa fa-close"></i>
                </button>
            </div>

        </div>
        <hr class="horizontal dark my-1">
        <div class="card-body pt-sm-3 pt-0">

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

            <div class="mt-3">
                <h6 class="mb-0">Sidenav Type</h6>
                <p class="text-sm">Choose between 2 different sidenav types.</p>
            </div>
            <div class="d-flex">
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
                <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
            <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>

            <div class="mt-3">
                <h6 class="mb-0">Navbar Fixed</h6>
            </div>
            <div class="form-check form-switch ps-0">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
            </div>
            <hr class="horizontal dark mb-1 d-xl-block d-none">
            <div class="mt-2 d-xl-block d-none">
                <h6 class="mb-0">Sidenav Mini</h6>
            </div>
            <div class="form-check form-switch ps-0 d-xl-block d-none">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
            </div>
            <hr class="horizontal dark mb-1 d-xl-block d-none">
            <div class="mt-2 d-xl-block d-none">
                <h6 class="mb-0">Light/Dark</h6>
            </div>
            <div class="form-check form-switch ps-0 d-xl-block d-none">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
            </div>
            <hr class="horizontal dark my-sm-4">
            <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Buy now</a>
            <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free demo</a>
            <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/soft-ui-dashboard">View documentation</a>
            <div class="w-100 text-center">
                <a class="github-button" href="https://github.com/creativetimofficial/ct-soft-ui-dashboard-pro" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                <h6 class="mt-3">Thank you for sharing!</h6>
                <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20PRO%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-pro" class="btn btn-dark mb-0 me-2" target="_blank">
                    <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                </a>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="../assets/js/plugins/dragula/dragula.min.js"></script>
<script src="../assets/js/plugins/jkanban/jkanban.js"></script>
<script src="../assets/js/plugins/multistep-form.js"></script>
<script src="../assets/js/plugins/choices.min.js"></script>
<script>
    if (document.getElementById('choices-country')) {
        var country = document.getElementById('choices-country');
        const example = new Choices(country);
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile + '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<script>
    $(document).ready(function(){
        $("#price").on("input", function(){
            $("#output").text($(this).val());
        });
    });
    $(document).ready(function(){
        $("#name").on("input", function(){
            $("#nom").text($(this).val());
        });
    });
    $(document).ready(function(){
        $("#description").on("input", function(){
            $("#offer").text($(this).val());
        });
    });
</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.8"></script>
</body>
</html>