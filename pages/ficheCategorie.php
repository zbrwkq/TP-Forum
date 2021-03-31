<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
require_once "../traitements/ficheCategorie.php";

?>

<div class="container">
    <h3 class="my-2">Categorie : <?=$_GET["id"];?></h3>
    <form method="post" class="list-group" enctype="multipart/form-data">
        <?php

        ?>
                <div class="list-group-item">
                <h5>Catégorie</h5>
                <input type="text" name="categorie" id="categorie" value="<?=$categorie["designation"];?>" class="form-control">
                </div>

                <div class="list-group-item">
                <h5>Image</h5>
                <input type="file" name="image" id="image"  class="form-control">
                </div>
        <div class="d-flex my-3 px-2">
        <input type="submit" value="Enregistrer" class="btn btn-warning mr-2">
        <a href="listeCategories.php" class="btn btn-info">Annuler</a>
        <a href="supprCategorie.php?id=<?=$_GET["id"];?>" class="btn btn-danger ml-auto">Supprimer</a>
        </div>
    </form>
</div>