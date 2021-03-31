<?php
require_once "../modeles/modele.php";

if(empty($_GET["id"])){
    header("location:listeCategories.php");
    exit;
}
if(!empty($_POST["identifiant"]) && !empty($_POST["idRole"])){
    extract($_POST);
    updateUtilisateur($identifiant,$idRole,$_GET["id"]);
    if(!empty($_FILES["pdp"]["name"])){
        uploadPdp($_GET["id"]);
    }
    
    
    if(!empty($_POST["ajoutModeration"])){
        $requete=getBdd()->prepare("INSERT INTO moderation(idUtilisateur,idCategorie) VALUES (?,?)");
    $requete->execute([$_GET["id"],$_POST["ajoutModeration"]]);
    }
    $lien = "location:ficheUtilisateur.php?id=".$_GET["id"];
    // header($lien);
}

$utilisateur = profil($_GET["id"]);
$roles = recuperationRoles();
$moderation = moderationUtilisateur($_GET["id"]);
$categories = recuperationCategories();