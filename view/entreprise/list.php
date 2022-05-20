<?php
require_once "./controller/Controller.php";

?> 
<h1 class="text-center">Les entreprise</h1>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">idEntreprise</th>
                <th scope="col">nomEntreprise</th>
                <th scope="col">CoordonnéeGps</th>
                <th scope="col">Siegesocial</th>
                <th scope="col">dateCreation</th>
                <th scope="col">registreCommerce</th>
                <th scope="col">NINEA</th>
                <th scope="col">PageWeb	</th>
                <th scope="col">nombreEmployer</th>
                <th scope="col">idDomaine</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach($data as $key){ ?> 

                <tr>
                <td scope="col"> <?= $key["idEntreprise"]  ?> </td>
                <td scope="col"> <?= $key["nomEntreprise"]  ?> </td>
                <td scope="col"> <?= $key["CoordonnéeGps"]  ?> </td>
                <td scope="col"> <?= $key["Siegesocial"]  ?> </td>
                <td scope="col"> <?= $key["dateCreation"]  ?> </td>
                <td scope="col"> <?= $key["registreCommerce"]  ?> </td>
                <td scope="col"> <?= $key["NINEA"]  ?> </td>
                <td scope="col"> <?= $key["PageWeb"]  ?> </td>
                <td scope="col"> <?= $key["nombreEmployer"]  ?> </td>
                <td scope="col"> <?= $key["idDomaine"]  ?> </td>
               
            </tr>
            <?php   } ?> 
        </tbody>
    </table>
</div>