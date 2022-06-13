<?php
include("fb.php");
include("include/app.php");
include ("include/menusingup.php");
?> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EASYSCOOTER</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
        <!--====== Favicon Icon ======-->
        <link
          rel="shortcut icon"
          href="/Applications/MAMP/htdocs/play-bootstrap/assets/images/logo/logo-2.svg"
          type="image/svg"
        />
    
        <!-- ===== All CSS files ===== -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" href="assets/css/lineicons.css" />
        <link rel="stylesheet" href="assets/css/ud-styles.css" />
      </head>
<!-- ====== Header====== -->

<div class="mainsignup">
        <section class="signup">
          <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
            <h1 class="singtitle"><?php echo $lang['contact']; ?>
                <!--  Sign-Up  -->
            </h1>
          </div>
            <div class="contentsignup">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                      <div class="ud-signup-logo">
                        <img src="assets/images/logo/logo-black.svg" alt="logo" />
                      </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="<?php echo $lang['form1']; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder=" <?php echo $lang['form2']; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="<?php echo $lang['form3']; ?>"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="<?php echo $lang['form4']; ?>"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span><?php echo $lang['terms']; ?>
                <!-- J'accepte toutes les déclarations dans les   --><a href="#" class="term-service"><?php echo $lang['terms2']; ?>
                <!--  conditions d'utilisation  --> </a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="<?php echo $lang['form5']; ?>"/>
                        </div>
                    </form>
                    <p class="loginhere">
                       <?php echo $lang['terms3']; ?>
                <!--  Vous avez déjà un compte ?  --> <a href="/Projet-Annuel\FRONT\login.php" class="loginhere-link"><?php echo $lang['terms4']; ?>
                <!--  Connectez-vous ici  --></a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
<!-- ====== Header End ====== -->