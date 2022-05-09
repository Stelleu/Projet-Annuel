<?php ob_start();
$tittle = "Les TROTTS";
?>
<h1 class="h2">Les Trots</h1>
<!-- Ajouter un supprimer la selection-->
<!--
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
    Ajouter une trott
</button>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
-->
<hr>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">
                ID
            </th>
            <th scope="col">
                N°Trott
            </th>
            <th scope="col">
                Etat
            </th>
            <th scope="col">
                Km parcouru
            </th>
            <th scope="col">
                Position
            </th>
            <th scope="col">
                Statut
            </th>
            <th scope="col">
                Zone de collecte
            </th>
            <th scope="col">
                Action
            </th>
        </tr>
        </thead>
        <tbody>
        <td>
            <!--id-->
        </td>
        <td>
            <form method="post" action="controllers/scooter.php">
                <input type="text" name="number" placeholder="Numéro" required/>

        </td>
        <td>
            <select name="condition" class="form-control">
                <option value="1">Neuf</option>
                <option value="2">Correct</option>
                <option value="3">Endommagé</option>
            </select>
        </td>
        <td>
            <input type="text" readonly name="km" value="0" class="form-control-plaintext" />
        </td>
        <td>
            <input type="text" readonly name="location" value="Coordonnées" class="form-control-plaintext" />
        </td>
        <td>
            <select name="status" class="form-control">
                <option value="1">Libre</option>
                <option value="2">En course</option>
                <option value="3">En pause</option>
            </select>
        </td>
        <td>
            <select name="workzone" class="form-control">
                <option value="1">Nation</option>
                <option value="2">Gare de Lyon</option>
                <option value="3">Gare du Nord</option>
                <option value="4">Gare de Montparnasse</option>
            </select>
        </td>
        <td>
            <input type="submit" class="btn btn-outline-success form-control" name="add" value="Ajouter"/>
            </form>
        </td>
        </tbody>
        <tbody>
        <tr>
            <?php
            foreach($scooters as $cle => $infoscooters) {
            foreach ($infoscooters as $cle => $info) {
                if ($cle == "idScooter") {
                    echo "<td>" . $info . "</td>";
                } elseif ($cle == "number") {
                    echo "<td>" . $info . "</td>";
                } elseif ($cle == "condition") {
                    echo "<td>" . $info . "</td>";
                } elseif ($cle == "km") {
                    echo "<td>" . $info . "</td>";
                } elseif ($cle == "location") {
                    echo "<td>" . $info . "</td>";
                } elseif ($cle == "status") {
                    switch ($info){
                        case 1:
                            echo "<td>Libre</td>";
                            break;
                        case 2:
                            echo "<td>En course</td>";
                            break;
                        case 3:
                            echo "<td>En pause</td>";
                            break;
                    }
                } elseif ($cle == "workzone") {
                    echo "<td>" . $info . "</td>";
                }
            }
            ?>
            <form method="post" action="controllers\scooter.php">
                <input type="hidden" name="id" value="<?php echo $infoscooters['idScooter'];?>"/>
                <td>
                    <input type="submit" class="btn btn-outline-danger" name="delete" value="Supprimer"/>
                </td>

            </form>
        </tr>
        <?php

        }
        ?>
        </tbody>
    </table>
</div>
</form >

<?php


$adminContent = ob_get_clean();
require(__DIR__.'/../library/templateAdmin.php');
?>

