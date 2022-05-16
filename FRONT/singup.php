<?php
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
    
        <!-- Primary Meta Tags -->
    <meta name="title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
    <meta name="description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://uideck.com/play/">
    <meta property="og:title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
    <meta property="og:description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">
    <meta property="og:image" content="https://uideck.com/wp-content/uploads/2021/09/play-meta-bs.jpg">
    
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
            <h1 class="singtitle">
              Connexion à votre compte
            </h1>
          </div>
            <div class="contentsignup">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                      <div class="ud-signup-logo">
                        <img src="assets/images/logo/logo-black.svg" alt="logo" />
                      </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nom"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder=" E-mail"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Confirmez votre mot de passe"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte toutes les déclarations dans les <a href="#" class="term-service">conditions d'utilisation </a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                      Vous avez déjà un compte ? <a href="/FRONT/login.html" class="loginhere-link">Connectez-vous ici</a>
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