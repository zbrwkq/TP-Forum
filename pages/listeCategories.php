<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
require_once "../traitements/listeCategories.php";

?>

<div class="container">
    <h2>Liste des catégories</h2>
    <form method="post" class="d-flex w-50 my-3">
        <label for="ajoutCategorie" class="form-label">Ajouter une catégorie</label>
        <input type="text" id="ajoutCategorie" name="ajoutCategorie" class="form-control">
        <input type="submit" class="form-control btn btn-primary w-25">
    </form>
    <div class="list-group">
        <?php
        foreach($categories as $categorie){
        ?>
            <a class="list-group-item list-group-item-action" href="ficheCategorie.php?id=<?=$categorie["idCategorie"];?>">
                <p><?=$categorie["designation"];?></p>
            </a>
        <?php
        }
        ?>
    </div>
</div>