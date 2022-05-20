<?php
include_once "./utils/Formulaire.php";
$form = new formulaire();
?>
<div class="mt-5 container">
    <div class="col-7">

    </div>
    <div class="col-5">
        <h1 class="text-center">Ajouter une entreprise</h1>
        <form method="POST" action="">
            <?php
            $form->divForm("Nom de la region", "text", "", "nomRegion");
            $form->divForm("Superficie de la region", "text", "", "superficie");
            ?>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>