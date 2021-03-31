<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
require_once "../traitements/supprCategorie.php";


?>

<div class="container d-flex flex-column">
    <h1 class="mx-auto">Êtes vous sûr de vouloir supprimer la catégorie ?</h1>
    <div class="d-flex justify-content-around">
    <form method="post">
        <input type="submit" name="suppression" id="suppression" value="Oui" class="btn-lg btn-danger">
    </form>
    <a href="listeCategories.php" class="btn-lg btn-primary">Non</a>
    </div>
</div>