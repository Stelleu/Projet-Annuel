<?php
include("fb.php");
include("include/app.php");
include ("include/menu.php"); 
?>

     <!-- ====== Contact End ====== -->  
<section class="block1contact" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <h1 class="contacttitle">
                EASYSCOOTER
              </h1>
            </div>
          </div>
        <div class="formuler">
      <div class="ud-contact-form-wrapper wow fadeInUp"
          data-wow-delay=".2s">
          <h3 class="ud-contact-form-title">Contactez-nous</h3>
          <form class="row needs-validation" name='formulario' id='formulario' method='post' action='confirmacion.php' target='_self' enctype="multipart/form-data" novalidate>
            <div class="col-md-6">
                <label class="form-label">Nom:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <div class="invalid-feedback">
                    Nom
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="invalid-feedback">
                   Email.
                </div>
            </div>

            <div class="col-md-6">
                <label class="form-label">Téléphone:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
                <div class="invalid-feedback">
                Téléphone.
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label">Sujet:</label>
                <input type="text" class="form-control" id="asunto" name="Sujet" required>
                <div class="invalid-feedback">
                Sujet.
                </div>
            </div>

            <div class="col-md-12">
                <label class="form-label">Si vous le souhaitez, vous pouvez joindre un fichier :</label>
                <br>
                <input type='file' name='archivo' id='archivo'>
                <br>
                <div class="invalid-feedback">
                Saisissez le message.
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label">Message:</label>
                <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                <div class="invalid-feedback">
                Saisissez le message.
                </div>
            </div>


            <div class="col-12 m-1">
                <button class="btn btn-primary" id="boton-enviar" type="submit" value="Enviar" name="input_submit" onclick="sendForm()">Envoyer</button>
 
            </div>

        </form>




</body>
<script src="libs/formJs.js" ?id=<? print(date('H:i:s')); ?>></script>

</html>
        </div>
      </div>
    </div>
  </div>
</div>  
</div>
</div>
</section>       
       <!-- ====== Contact End ====== -->  
              
     
   