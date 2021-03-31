<?php
require_once "../modeles/modele.php";
if(empty($_GET["id"])){
    header("location:listeCategories.php");
}
if(!empty($_POST["suppression"]) && $_POST["suppression"] = "oui"){
    supprCategorie($_GET["id"]);
    header("location:listeCategories.php");
}