<!-- ====== Header Start ====== -->
<header class="ud-header">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo/logo.svg" alt="Logo">
                  </a>
                  <button class="navbar-toggler">
                    <span class="toggler-icon"> </span>
                    <span class="toggler-icon"> </span>
                    <span class="toggler-icon"> </span>
                  </button>
    
                  <div class="navbar-collapse">
                    <ul id="nav" class="navbar-nav mx-auto">
                      <li class="nav-item">
                      <a class="" href="\Projet-Annuel\FRONT\commentçamarche.php"><?php echo $lang['menu1']; ?><!-- Comment ça marche? ---></a>
                      </li>
    
                      <li class="nav-item">
                        <a class="ud-menu-scroll" href="#about"><?php echo $lang['menu2']; ?><!-- Aide ---></a>
                      </li> 
    
                      <li class="nav-item">
                        <a class="ud-menu-scroll" href="/Projet-Annuel/FRONT/contact.php"><?php echo $lang['menu3']; ?><!-- Contact ---></a>
                      </li>
    
                    
                        </ul>
                      </li>
                    </ul>
                  </div>
    
                  
                    <a class="ud-main-btn ud-white-btn ud-main-btn" href="/Projet-Annuel/FRONT/login.php">
                    <?php echo $lang['menu4']; ?><!-- Connexion -->
                    </a>
                  </div>
                </nav>
              </div>
            </div>
          </div>
       
        <!-- ====== Header End ====== -->


        
        <!-- ====== All Javascript Files ====== -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
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