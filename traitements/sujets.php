<?php
require_once "../modeles/modele.php";


if(empty($_GET["idCategorie"]) or empty($_GET["idCategorie"])){
    header("location:index.php");
}else{
    $categorie = categorie($_GET["idCategorie"]);
}
$sujets = recuperationSujets($_GET["idCategorie"]);