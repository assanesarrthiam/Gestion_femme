<?php
require_once "./utils/Formulaire.php";
$form = new Formulaire();
?>

<div class="mt-5 container">
    <div class="col-7">
    </div>
    <div class="col-5">
        <h1 class="text-center">Ajouter une Quartier</h1>
        <form method="POST" action="">
            <?php
            $form->divForm("Nom quartier", "text", "", "nomQuatier");
            $form->divForm("Superficie de la quartier", "text", "", "superficie");
            ?>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>