    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Company
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        About Us
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Team
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Products
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Blog
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Pricing
                    </a>
                </div>
                <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-twitter"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-pinterest"></span>
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">
                        <span class="text-lg fab fa-github"></span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright © <script>
                            document.write(new Date().getFullYear())
                        </script> ESGI students.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="../../view/assets/js/core/popper.min.js"></script>
    <script src="../../view/assets/js/core/bootstrap.min.js"></script>
    <script src="../../view/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../view/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<!--    <script>-->
<!---->
<!--        $(document).ready(function () {-->
<!--            $("form").submit(function (event) {-->
<!--                e.preventDefault(); // On empêche de soumettre le formulaire-->
<!--                var $this = $(this); // L'objet jQuery du formulaire-->
<!--                // Envoi de la requête HTTP en mode asynchrone-->
<!--                $.ajax({-->
<!--                    url: $this.attr('action'), // On récupère l'action (ici action.php)-->
<!--                    // url:"index.php?route=sign-in",-->
<!--                    type: 'post', // On récupère la méthode (post)-->
<!--                    data: $this.serialize(), // On sérialise les données = Envoi des valeurs du formulaire-->
<!--                    dataType: 'json', // JSON-->
<!---->
<!--                    success: function(json) { // Si ça c'est passé avec succès-->
<!--                        // ici on teste la réponse-->
<!--                        if(json.reponse == '1') {-->
<!--                            alert('Connexion OK');-->
<!--                            // On peut aussi rediriger vers l'index-->
<!--                            alert("ok")-->
<!--                        } else {-->
<!--                            alert('Erreur : '+json.reponse);-->
<!--                        }-->
<!--                    }?-->
<!--                        error: function(){-->
<!--                            alert('Erreur : ');-->
<!--                        }-->
<!--                });-->
<!---->
<!--            });-->
<!--        });-->
<!--    </script>-->
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
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../view/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
    </body>
</html>