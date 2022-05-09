<?php
echo '<form method="post" action="test.php">';
echo '<input type="hidden" name="id_user" value='.$users['idUser'].'>';
  echo '<td> <select class="form-select"  name="subject" aria-label="Default select example" onChange=" this.form.submit()" > ';
echo ' <option value="">Bloquer</option>';
  echo ' <option value="1">Bloquer</option>';
  echo ' <option value="2">Débloquer</option>';
  echo ' <option value="3>Supprimer</option>';
  echo ' <option value="4">Restreindre</option>';
echo ' </select>';
echo "</td>";
include "controllers\user.php";
if (isset($_POST['subject'])) {

    $recupdonnee=$_POST['subject'];
   echo $recupdonnee;
    
}

