<?php ob_start();
$tittle = "Les Utilisateurs";
?>

<h1 class="h2">Nos utilisateurs</h1>
<hr>
<div class="table-responsive container">
	<table class="table table-hover table-sm">
		<thead>
			<tr>
				<th scope="col">
					ID
				</th>
				<th scope="col">
					Prénom
				</th>
				<th scope="col">
					Nom de famille
				</th>
				<th scope="col">
					Email
				</th>
                <th scope="col-5">
                    Edit
                </th>
                <th scope="col">
                    Action
                </th>
			</tr>
		</thead>
		<tbody>
			<tr>
                <?
                foreach($users as $cle => $infousers) {
                    foreach ($infousers as $cle => $info) {
                        if ($cle == "idUser") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "firstname") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "lastname") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "email") {
                            echo "<td>" . $info . "</td>";
                        }elseif ($cle== "state"){
                            ?>
                            <form method="post" action="controllers\user.php">
                                <td>
                                    <select class="form-control" name="subject" >
                                        <option>Choisir</option>
                                        <option value="1">Bloquer</option>
                                        <option value="2">Débloquer</option>
                                        <option value="3">Supprimer</option>
                                        <option value="4">Restreindre</option>
                                    </select>
                                </td>
                            <input type="hidden" name="id" value="<?php echo $infousers['idUser'];?>"/>
                            <td><input type="submit" class="btn btn-outline-success form-control" name="valid" value="Valider les changements"></td>
                        <?php }?>
                        </form>
                    <?php
                    }
                    echo "</tr>";

                    }
                    ?>
                            <?php
                ?>
        </tbody>
    </table>
  </div>
  </form >
<?php


$adminContent = ob_get_clean(); 
 require(__DIR__.'/../library/templateAdmin.php');
 ?>