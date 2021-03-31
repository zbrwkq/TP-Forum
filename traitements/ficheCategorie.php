<?php
    require_once "../modeles/modele.php";
if(empty($_GET["id"])){
    header("location:listeCategories.php");
}
if(!empty($_POST["categorie"])){
    updateCategorie($_POST["categorie"],$_GET["id"]);
    if(!empty($_FILES["image"]["name"])){
        $dossier = "../pages/images/";
        $nom = $_POST["categorie"];
        $extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
        $fichier = $dossier . $nom . "." . $extension;
        if(getimagesize($_FILES["image"]["tmp_name"])){
            if($_FILES["image"]["size"] <=2000000 || $_FILES["image"]["error"] == 1){
                if($_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/jpeg" ){
                    if(move_uploaded_file($_FILES["image"]["tmp_name"],$fichier)){
                        updateImage($fichier,$_GET["id"]);
                        echo "l'image a bien été enregistré";
                    }else{
                        echo "le fichier n'a pas pu être enregistré";
                    }
                } else{
                    echo "le fichier n'a pas le bon type";
                }
            }else{
                echo "le fichier pèse plus de 2M";
            }
        }else{
            echo "le fichier n'est pas une image";
        }
    }
}



$categorie = categorie($_GET["id"]);