<?php
require_once "./controller/RegionController.php";

?> 
<h1 class="text-center">La liste des regions</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Identifiant</th>
                <th scope="col">Nom de la region</th>
                <th scope="col">superficie</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($data as $key){ ?> 

                <tr>
                <td scope="col"> <?= $key["id"]  ?> </td>
                <td scope="col"> <?= $key["nomRegion"]  ?> </td>
                <td scope="col"> <?= $key["superficie"]  ?> </td>
                 
            </tr>
            <?php   } ?> 
        </tbody>
    </table>
</div>