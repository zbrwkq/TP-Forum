<?php
require_once "../modeles/modele.php";
if(!empty($_POST["ajoutCategorie"])){
    ajoutCategorie($_POST["ajoutCategorie"]);
    header("location:listeCategories.php");
}
$categories = recuperationCategories();