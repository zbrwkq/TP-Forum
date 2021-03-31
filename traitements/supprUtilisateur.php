<?php
require_once "../modeles/modele.php";

if(!empty($_POST["suppression"]) && $_POST["suppression"] = "oui"){
    supprUtilisateur($_GET["id"]);
    header("location:listeUtilisateurs.php");
}