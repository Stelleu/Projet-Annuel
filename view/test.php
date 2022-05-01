<?php
echo '<form method="post">';
  echo '<td> <select class="form-select"  name="subject" aria-label="Default select example" onChange=" this.form.submit()" > ';
  echo ' <option value="1">Bloquer</option>';
  echo ' <option value="2">Débloquer</option>';
  echo ' <option value="3">Supprimer</option>';
  echo ' <option value="4">Restreindre</option>';
echo ' </select>';
echo "</td>";
include "controllers\user.php";
if (isset($_POST['subject'])) {
   
    $recupdonnee=$_POST['subject'];
    User::status($recupdonnee);
    
}

