<?php ;
ob_start(); ?>
<h1 class="h2">Nos utilisateurs</h1>
<hr>
<div class="table-responsive">
	<table class="table table-hover">
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
					Téléphone
				</th>
				<th scope="col">
					Email
				</th>
				<th scope="col">
					Statut
				</th>
				<th scope="col">
					Adresse
				</th>
				<th scope="col">
					Code Postal
				</th>
				<th scope="col">
					Date de Naissance
				</th>
				<th scope="col">
					Point
				</th>
                <th scope="col">
                    Wallet
                </th>
                <th scope="col">
                    Edit
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
                        } elseif ($cle == "phone") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "email") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "status_user") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "address") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "zipcode") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "birthdate") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "points") {
                            echo "<td>" . $info . "</td>";
                        } elseif ($cle == "wallet") {
                            echo "<td>" . $info . "</td>";
                        }elseif ($cle== "state"){
                            echo '<form method="POST" action="controllers\user.php">';
                            echo '<input type="hidden" name="id_user" value='.$infousers['idUser'].'>';
                            echo '<td> <select class="form-select"  name="subject" aria-label="Default select example" onChange="this.parentElement.parentElement.submit()"> ';
                            echo ' <option value="0">Choisir</option>';
                            echo ' <option value="1">Bloquer</option>';
                            echo ' <option value="2">Débloquer</option>';
                            echo ' <option value="3">Supprimer</option>';
                            echo ' <option value="4">Restreindre</option>';
                            echo ' </select>';
                            echo "</td>";
                        }
                    }
                echo "</tr>";

            }
                ?>
        </tbody>
    </table>
  </div>
  </form >

<?php


$adminContent = ob_get_clean(); 
 require(__DIR__.'\..\library\templateAdmin.php');
 ?>