
<!-- ====== Header Start ====== -->
<header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="home">
                <img src="FRONT/assets/images/logo/logo.svg" alt="Logo">
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="" href="commentçamarche"><?php echo $lang['menu1']; ?><!-- Comment ça marche? ---></a>
                  </li>

                  <li class="nav-item">
                    <a class="" href=""><?php echo $lang['menu2']; ?><!-- Aide ---></a>
                  </li> 

                  <li class="nav-item">
                    <a class="" href="contact"><?php echo $lang['menu3']; ?><!-- Contact ---></a>
                  </li>


                    </ul>
                  </li>
                </ul>
              </div>
              <?php 
        // Test si l'utilisateur est déjà connecté
    if (isset($_SESSION['connect'])){
        echo 
              '<p style="display:flex;"> <a href=" profil.php" style="text-align:center; color: #FF5113;">  Bonjour '.$_SESSION['pseudo'].' !</a>
              <a style="text-align:center; color: white;" href=" deconnexion.php"> Se déconnecter </a></p>';
    } else { ?>
               <div class="navbar-btn d-none d-sm-inline-block">
                <a href="connexion" class="ud-main-btn ud-login-btn"><?php echo $lang['menu4']; ?><!-- Connexion --></a>
                <a class="ud-main-btn ud-white-btn"  href="singup" ><?php echo $lang['menu5']; ?><!--  S'inscrire --></a>
              </div>

    <?php 
        }
    ?>

              
              <div>
                    <a href="index.php?lang=fr"><img src="FRONT/assets/images/lang/Flag_of_France.jpeg" width="30px" height="20px" style="margin-left: 25px;"></a>
                    <a href="index.php?lang=en"><img src="FRONT/assets/images/lang/flagengland.jpeg" width="30px" height="20px" style="margin-left: 5px;"></a>
              </div>
            </nav>
          </div>
        </div>
      </div>


      <!-- ====== All Javascript Files ====== -->
    <script src="FRONT/assets/js/bootstrap.bundle.min.js"></script>
    <script src="FRONT/assets/js/wow.min.js"></script>
    <script src="FRONT/assets/js/main.js"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
    </header>
    <!-- ====== Header End ====== -->
