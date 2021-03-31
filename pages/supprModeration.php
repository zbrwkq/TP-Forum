<?php
require_once "../traitements/header.php";
require_once "../pages/verifAdmin.php";
require_once "../modeles/moderation.php";

if(!empty($_GET["idUtilisateur"]) && !empty($_GET["idCategorie"])){
    supprModeration($_GET["idUtilisateur"],$_GET["idCategorie"]);
    
    $lien ="location:ficheUtilisateur.php?id=".$_GET["idUtilisateur"];
    header($lien);
}else{
    header("location:listeUtilisateurs.php");
}
?>