<?php
require_once "../modeles/modele.php";

if(empty($_GET["idCategorie"]) || empty($_GET["nomCategorie"])){
    header("location:index.php");
}

if(!empty($_POST["designation"]) && !empty($_POST["contenu"])){
    // envoi du formulaire
    extract($_POST);
    try{
        ajoutSujet($_GET["idCategorie"],$_SESSION["idUtilisateur"],$designation,$contenu);
        ?>
        <div class="alert alert-success m-3">L'ajout a bien été pris en compte</div>
        <?php
        // redirection
        
        header("refresh:2 ; sujets.php?idCategorie=".$_GET["idCategorie"]."&nomCategorie=".$_GET["nomCategorie"]);
    }catch(Exception $e){}
}