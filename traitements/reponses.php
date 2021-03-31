<?php
require_once "../modeles/modele.php";

// ajout d'une réponse
if(!empty($_POST["reponseSujet"])){
    extract($_POST);
    ajoutReponse($reponseSujet, $_GET["idSujet"], $_SESSION["idUtilisateur"]);
    header("refresh:0");
}
// modif d'une reponse
if(!empty($_POST["action"]) && $_POST["action"] == "modifier"){
?>
<div class="popup">
    <h4>Modifier la réponse</h4>
    <form method="post">
        <textarea name="modifReponse" class="form-control"><?=$_POST["contenu"];?></textarea>
        <div class="d-flex justify-content-around mt-3">
            <input type="hidden" name="id" value="<?=$_POST["id"];?>">
            <input type="submit" class="btn btn-warning text-white">
            <a href="reponses.php?idSujet=<?=$_GET["idSujet"];?>&nomSujet=<?=$_GET["nomSujet"];?>&idCategorie=<?=$_GET["idCategorie"];?>" class="btn btn-info">Annuler</a>
        </div>
    </form>
</div>
<?php
}
if(!empty($_POST["modifReponse"])){
    modifReponse($_POST["modifReponse"],$_POST["id"]);
    
    header("refresh:0");
}
//suppression d'une réponse
if(!empty($_POST["action"]) && $_POST["action"] == "supprimer"){
    ?>
    <div class="popup">
        <h4>Supprimer la réponse ?</h4>
        <form method="post" class="d-flex justify-content-around mt-3">
            <input type="hidden" name="id" value="<?=$_POST["id"];?>">
            <input type="submit" name="supprReponse" value="Confirmer" class="btn btn-danger">
            <a href="reponses.php?idSujet=<?=$_GET["idSujet"];?>&nomSujet=<?=$_GET["nomSujet"];?>&idCategorie=<?=$_GET["idCategorie"];?>" class="btn btn-info">Annuler</a>
        </form>
    </div>
    <?php
}
if(!empty($_POST["supprReponse"])){
    supprReponse($_POST["id"]);
    
    header("refresh:0");
}

//recupération des données sur le sujet
$sujet = sujet($_GET["idSujet"]);

//recupération des  reponses
$reponses = recuperationReponse($_GET["idSujet"]);


// verification si le modérateur a le control sur cette catégorie
$moderation = moderation($_GET["idCategorie"]);
if(!empty($_SESSION)){
    $mod = 0;
    if($_SESSION["idRole"] == 3){
        foreach($moderation as $categorie){
            if($_SESSION["idUtilisateur"] == $categorie["idUtilisateur"]){
                $mod = 1;
                break;
            }
        }
    }
    }