<?php
require_once "../traitements/header.php";
require_once "../pages/navigation.php";
require_once "../pages/verifAdmin.php";
require_once "../traitements/ficheUtilisateur.php";

?>

<div class="container">
    <h3 class="my-2">Utilisateur : <?=$_GET["id"];?></h3>
    <form method="post" class="list-group" enctype="multipart/form-data">
        <?php

        ?>
                <div class="list-group-item">
                    <h5>Identifiant</h5>
                    <input type="text" name="identifiant" id="identifiant" value="<?=$utilisateur["identifiant"];?>" class="form-control">
                </div>
                <div class="list-group-item">
                    <h5>Photo de profil</h5>
                    <input type="file" name="pdp" id="pdp"  class="form-control">
                </div>
                <div class="list-group-item">
                    <h5>Rôle</h5>
                    <select type="text" name="idRole" id="idRole" class="form-control">
                        <?php
                        foreach($roles as $role){
                            ?>
                            <option value="<?=$role["idRole"];?>"
                            <?=($utilisateur["idRole"] === $role["idRole"] ? "selected" : "");?>
                            ><?=$role["designation"];?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <?php
                if($utilisateur["idRole"]==3){
                    ?>
                    <div class="list-group-item">
                        <h5>Categorie gérée</h5>
                        <?php
                        foreach($moderation as $categorie){
                            ?>
                            <div class="list-group-item d-flex">
                                <?=$categorie["designation"];?>
                                <a href="supprModeration.php?idUtilisateur=<?=$_GET["id"];?>&idCategorie=<?=$categorie["idCategorie"];?>" class="ml-auto btn btn-outline-danger">X</a>
                            </div>
                            <?php
                        }
                        
                        ?>
                        <select name="ajoutModeration" id="ajoutModeration" class="form-control my-2">
                            <option value="" selected>Ajouter une catégorie</option>
                        <?php
                        foreach($categories as $categorie){
                            $duplicata = 0;
                            foreach($moderation as $categorieModeration){
                                if($categorie["idCategorie"] == $categorieModeration["idCategorie"]){
                                    $duplicata = 1;
                                    break;
                                }
                            }
                            if($duplicata == 0){
                                ?>
                                <option value="<?=$categorie["idCategorie"];?>">
                                <?=$categorie["designation"];?>
                                </option>
                                <?php
                            }
                        }
                        ?>
                        </select>
                    </div>
                    <?php
                }
                ?>
        <div class="d-flex my-3 px-2">
        <input type="submit" value="Enregistrer" class="btn btn-warning mr-2">
        <a href="listeUtilisateurs.php" class="btn btn-info">Annuler</a>
        <a href="supprUtilisateur.php?id=<?=$_GET["id"];?>" class="btn btn-danger ml-auto">Supprimer</a>
        </div>
    </form>
</div>