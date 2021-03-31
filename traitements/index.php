<?php
require_once "../modeles/modele.php";
$recuperationCategories = recuperationCategories();
if(!empty($_SESSION)){
    $informationsUtilisateur = profil($_SESSION["identifiant"]);
}