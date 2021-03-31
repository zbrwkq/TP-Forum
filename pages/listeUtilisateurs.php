<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
require_once "../traitements/listeUtilisateurs.php";



?>
<div class="container">
    <h2 class="my-2">Liste des utilisateurs</h2>
    <a href="ajoutUtilisateur" class="btn btn-primary text-white my-2">Ajouter un utilisateur</a>
    <div class="list-group my-2">
        <?php
        foreach($utilisateurs as $utilisateur){
        ?>
            <a class="list-group-item list-group-item-action d-flex" href="ficheUtilisateur.php?id=<?=$utilisateur["idUtilisateur"];?>">
                <p><?=$utilisateur["identifiant"];?></p>
                <p class="ml-auto"><?=$utilisateur["designation"];?></p>
            </a>
        <?php
        }
        ?>
    </div>
</div>