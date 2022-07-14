<?php
include("fb.php");
include("include/app.php");
include ("include/menu.php");
?>
<!-- ====== Hero Start ====== -->
<section class="ud-hero" id="home">  
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
          <h1 class="ud-hero-title">
            EASYSCOOTER
          </h1>
          <p class="ud-hero-desc"> <?php echo $lang['description']; ?> 
           <!-- Des scooters 100% électriques, en libre-service, disponibles sur l’appli Easyscooter.-->
          </p>
        <ul class="ud-hero-buttons">
            <li>
              <a href="#" rel="nofollow noopener" target="_blank" class="ud-main-btn ud-white-btn"><?php echo $lang['btn']; ?>
                <!-- Découvrez notre produit  -->
              </a>
            </li>
        </div>
    </div>
  </div>
</section>
<!-- ====== Hero End ====== -->

<!-- ====== Features Start ====== -->
<section id="features" class="ud-features">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-section-title">
         
          <h2><?php echo $lang['advantages']; ?><!-- Advantages d'utiliser Easyscooter ---></h2>
          <!--<p>
            ?????
          </p>-->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3">
        <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
          <div class="ud-feature-icon">
            <i class="lni lni-gift"></i>
          </div>
          <div class="ud-feature-content">
            <h3 class="ud-feature-title"><?php echo $lang['eco']; ?> <!-- Écologique --></h3>
            <p class="ud-feature-desc">
              
            </p>
            <a href="javascript:void(0)" class="ud-feature-link">
         
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
          <div class="ud-feature-icon">
            <i class="lni lni-move"></i>
          </div>
          <div class="ud-feature-content">
            <h3 class="ud-feature-title"><?php echo $lang['speed']; ?><!-- Rapide --></h3>
            <p class="ud-feature-desc">
              
            </p>
            <a href="javascript:void(0)" class="ud-feature-link">
             
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
          <div class="ud-feature-icon">
            <i class="lni lni-layout"></i>
          </div>
          <div class="ud-feature-content">
            <h3 id="titlethree1" class="ud-feature-title"><?php echo $lang['inexpensive']; ?><!-- Économique --></h3>
            <p class="ud-feature-desc">
              
            </p>
            <a href="javascript:void(0)" class="ud-feature-link">
              
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- ====== Features End ====== -->
  <!-- ETAPES WEBGL-->
<section>
  <div class="containerfonction">
    <div class="text-center"> 
    <h2 class="title-blockhp"><?php echo $lang['etapes']; ?><!-- Comment se fournir une Easy Scooter --></h2>
    </div>
    <div class="row">
      <div class="col timeline">           
          <ul class="text-center">
            <li>
              <div class="blockhp">
                <h3 class="title2-blockhp"><?php echo $lang['etape1']; ?><!-- Étape 1 --></h3> 
                      <p>
                      <?php echo $lang['etape1explain']; ?><!-- Cherchez sur la carte de l’appli une trottinette électrique se trouvant à proximité. -->
                      </p>
              </div>
            </li>
            <li>
              <div class="blockhp">
                <h3 class="title2-blockhp"><?php echo $lang['etape2']; ?><!-- Étape 2--></h3> 
                      <p><?php echo $lang['etape2explain']; ?><!-- Le code QR pour déverrouiller votre trottinette électrique et démarrer votre trajet. -->
                      </p> 
              </div>
            </li>
            <li>
              <div class="blockhp">
                <h3 class="title2-blockhp"><?php echo $lang['etape3']; ?><!-- Étape 3 --></h3> 
                      <p>
                      <?php echo $lang['etape3explain']; ?><!-- Poussez la trottinette électrique vers l’avant pour replier la béquille et vous voilà prêt pour le grand départ. -->
                      </p>
              </div>
            </li>
            <li>
              <div class="blockhp">
                <h3 class="title2-blockhp"> <?php echo $lang['etape4']; ?><!-- Étape 4 --></h3>
                      <p>
                      <?php echo $lang['etape4explain']; ?><!-- Une fois votre trajet achevé, garez votre trottinette sur une place de stationnement réservée à cet effet ou trouvez un endroit sûr sur le trottoir à distance des piétons. -->
                      </p>
              </div>
            </li>
            <li>
              <div class="blockhp">
                <h3 class="title2-blockhp"><?php echo $lang['etape5']; ?><!-- Étape 5 --></h3> 
                <p>
                <?php echo $lang['etape5explain']; ?><!-- votre trottinette électrique sur sa béquille, dans l’appli sélectionnez « Achever le trajet », et voilà, c'est fini ! -->
                </p>
              </div>
            </li>
            
           
          </ul>
      </div>
      <div class="col">
        <div>
         <!-- <img src="assets/images/about/videowgl.mp4" alt="appwebgl" />--->
          <video controls width="550" height="600">

            <source src="assets/images/about/videowgl.mp4"
                    type="video/webm">
        
        
            
        </video>
        </div>
      </div>
    </div>
  </div>
  
</section>
<!-- ====== Features End ====== -->

<section id="features" class="ud-features">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-section-title">
         
          <h2><?php echo $lang['regles']; ?><!-- Les règles à respecter --></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3">
        <div class="ud-single-feature wow fadeInUp" data-wow-delay=".1s">
          <div class="stylecontour">
            
              <img id="casqueimg" src="assets/images/caquemoto2.png" alt="about-image" >
            
          </div>
          <div class="ud-feature-content">
            <h3 id="1b" class="ud-feature-title"><?php echo $lang['regle1']; ?><!-- Portez un casque --></h3>
            <p class="ud-feature-desc">
              
            </p>
            <a href="javascript:void(0)" class="ud-feature-link">
         
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="ud-single-feature wow fadeInUp" data-wow-delay=".15s">
          <div class="stylecontour">
            
            <img id="codeimg" src="assets/images/code de la route.jpeg" alt="about-image">
          
        </div>
          <div class="ud-feature-content">
            <h3 id="2b" class="ud-feature-title"><?php echo $lang['regle2']; ?><!-- Respecter le code de la route --> </h3>
            <p class="ud-feature-desc">
              
            </p>
            <a href="javascript:void(0)" class="ud-feature-link">
             
            </a>
          </div>
        </div>
      </div>
      <div class="col-xl-3">
        <div class="ud-single-feature wow fadeInUp" data-wow-delay=".2s">
          <div class="stylecontour">
            
            <img id="stationimg" src="assets/images/stationscooter.webp" alt="about-image">
          
        </div>
           
          <div class="ud-feature-content">
            <h3 id="titlethree" class="ud-feature-title"><?php echo $lang['regle3']; ?><!-- Stationner responsablement --></h3>
            <p class="ud-feature-desc">
              
            </p>
            <a href="javascript:void(0)" class="ud-feature-link">
              
            </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>



<!-- ====== Pricing Start ====== -->
<section id="pricing" class="ud-pricing">
  <div class="container">
    <div class="row">
      <div class="col-lg-13">
        
          <h2 class="titlemap"><?php echo $lang['titlefind']; ?><!-- Où nous trouver? -->
          </h2>
          <div class="padroit">
              <p><?php echo $lang['pfind']; ?><!-- Fini les embouteillages, aux rues polluées et aux transports publics encombrés - de déplacements plus agréables sont à portée de main. Explorez la carte pour trouver votre prochain trajet durable et faire bouger les choses. -->
                   
              </p>
          </div>

          <div class="padroit">
            <p class="pdeux">
            <?php echo $lang['reservation']; ?><!--  Réserver votre premier trajet en quelques minutes ! -->
            </p>
        </div>


        <div class="boutonenregistrement">

          <div class="navbar-btn d-none d-sm-inline-block">
            
            <a class="inscription ud-white-btn" href="https://www.youtube.com/watch?v=aWcVx-jUjAw">
              <?php echo $lang['inscription']; ?><!--  Inscription -->
            </a>
          </div>
        </div>

      
          </div>
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89077.1720074736!2d4.764918569449523!3d45.757929197827096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1651402766452!5m2!1sfr!2sfr" width="600" height="700" ></iframe>
      </div>
      </div>

      </div>
    </div>
  </div>
</section>



</body>
</html>
